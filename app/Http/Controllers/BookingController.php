<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spesialisasi;
use App\Jadwal;
use App\Doctor;
use App\Tempat;
use App\Pasien;
use App\User;
use Auth;
use DB;
use Alert;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Hash;
use Redirect;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function proses1(Request $request)
    {
        $request->validate([
            'jadwalDoctor' => 'required' ,
        ]);

        $jadwal_id = $request->jadwalDoctor;
        $jadwal = Jadwal::find($jadwal_id);
        return redirect('/bookingstep1/'.$jadwal_id)->with('jadwal',$jadwal_id);
    }

    public function getViewStep1($id)
    {
        return view('bookingstep1',['jadwal' => $id]);
    }

    public function getViewStep2(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required' , 
            'tanggal_lahir_pasien' => 'required' , 
            'jenis_kelamin_pasien' => 'required' , 
            'alamat_pasien' => 'required' , 
            'riwayat_sakit' => 'required' 
        ]);

        // Untuk no_urut, perhitungannya
        // cari tanggal berobat yang >= now (dari internet gatau untuk apa), dan
        // cari jadwal_id yang sama dengan request jadwal_doctor(jadwal_id)
        $cek = Pasien::where('tanggal_berobat', '>=', 'NOW()')->where('jadwal_id', $request->jadwal_doctor)->get();
        // jika di tabel belum ada tanggal berobat dengan jadwal id yang sama
        if (count($cek) > 0) 
        {
            // jika ada di tabel, maka no urut yang trakhir bakal di tambah 1
            $no_urut = count($cek) + 1;
        } 
        else 
        {
            // jika di tabel belum ada tanggal berobat dengan jadwal id yang sama, maka no_urut sama dengan 1
            $no_urut = 1;
        }

        // untuk cari di database jadwal, id jadwal yang sesuai dengan request jadwal_doctor
        $jadwal = Jadwal::where('id','=',$request->jadwal_doctor)->first();

        // untuk menampung waktu_mulai ke variable waktu_mulai
        $waktu_mulai = $jadwal->waktu_mulai;

        // untuk perhitungan waktu aman, dari format H:I:S ke format detik(strtotime)
        $waktu_aman = strtotime($waktu_mulai) + ((10 * ($no_urut - 1) - 30) * 60);
        // kembaliin ke format H:I:S lagi dari format detik detik (strtotime)
        $waktu_aman = date('H:i:s', $waktu_aman);
        
        $waktu_masuk = strtotime($waktu_mulai) + (10 * ($no_urut - 1) * 60);
        $waktu_masuk = date('H:i:s', $waktu_masuk);
        
        // untuk proses hari, dari hari di format ke dalam bentuk detik kemudian di format ke dalam bentuk tanggal
        $tanggal_berobat = strtotime("next ".$jadwal->day());
        $tanggal_berobat = date('Y-m-d',$tanggal_berobat);
        
        $pasien = Pasien::create([
            'nama_pasien' => $request->nama_pasien ,
            'tanggal_lahir_pasien' => $request->tanggal_lahir_pasien ,
            'jenis_kelamin_pasien' => $request->jenis_kelamin_pasien ,
            'alamat_pasien' => $request->alamat_pasien ,
            'riwayat_sakit' => $request->riwayat_sakit ,
            'jadwal_id' => $request->jadwal_doctor ,
            'user_id' => $request->user()->id ,
            'tanggal_berobat' => $tanggal_berobat ,
            'no_urut' => $no_urut ,
            'waktu_masuk' => $waktu_masuk ,
            'waktu_aman' => $waktu_aman ,
        ]);

        return view('bookingstep2')->with(['pasien' => $pasien]);
    }

    public function getViewStep3()
    {
        return view('bookingstep3');
    }

    public function getViewFindRating(Request $request)
    {
        // $pasiens = $request->user()->pasiens()->get(); <<<< kalo mau sesuai dokter yang udah pernah user singgahin
        
        $doctors = Doctor::all();

        return view('findrating', ['doctors' => $doctors]);
    }

    public function submitrating(Request $request)
    {
        $this->validate($request,[
            'doctor_id' => 'required|not_in:null',
            'rating_user' => 'required|not_in:null',
        ]);

        // Untuk melihat ada dokter_id dan user_id yang sama ga di database
        $ada = count(DB::table('ratings')->where('doctor_id', $request->doctor_id)->where('user_id', $request->user()->id)->get()) > 0;

        // Jika ada
        if ($ada) 
        {
            // data yang di database di update dengan data inputan yang baru
            $request->user()->rating()->updateExistingPivot($request->doctor_id, 
            [
                // kolom rating_user di isi dengan inputan yang baru
                'rating_user' => $request->rating_user
            ]);
        } 
        else 
        {
            // jika tidak ada maka membuat baris isian baru
            $request->user()->rating()->attach($request->doctor_id, ['rating_user' => $request->rating_user]);
        }

        $rating_baru = 0; 
        $jumlah_penilai = DB::table('ratings')->where('doctor_id', $request->doctor_id)->get();
        foreach ($jumlah_penilai as $nilai) 
        {
            // penjumlahan semua penilaian terhadap doctor_id yang sama
            $rating_baru += $nilai->rating_user;
        }
        // (float) menandakan bahwa rating_baru bertipe float dari yang awalnya integer
        $rating_baru = (float) $rating_baru / count($jumlah_penilai);

        // mencari doctor_id di database Doctor yang sesuai dengan requestnya
        $doctor = Doctor::find($request->doctor_id);
        // kolom rating di tabel doctor di assignmen dengan rating_baru
        $doctor->rating = $rating_baru;
        $doctor->save();

        return redirect('/prosesRating');
    }

    public function getViewRiwayat(Request $request)
    {
        $riwayats = $request->user()->pasiens()->get();

        return view('riwayat')->with('riwayats',$riwayats)->with('no',1);
    }

    public function getViewProfile($id)
    {
        $user = User::where('id','=',$id)->first();

        return view('profile', ['user' => $user]);
    }

    public function editProfile(Request $request, $id)
    {
        $this->validate($request,[
            'username' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);

            $user->username = $request->username;
            $user->nama = $request->nama;
            $user->alamat = $request->alamat;
            $user->nik = $request->nik;
            $user->email = $request->email;

        $user->save();

        Alert::success('Edit profil sukses dilakukan', 'Sukses')->autoclose(3000);

        return redirect('/profile/{$id}');
    }

    private function admin_credential_rules(array $data)
    {
      $messages = [
        'current-password.required' => 'Field current password harus di isi',
        'password.required' => 'Mohon isikan password anda',
      ];

      $validator = Validator::make($data, [
        'current-password' => 'required',
        'password' => 'required|string|min:6|confirmed', 
      ], $messages);

      return $validator;
    }

    public function editPassword(Request $request)
    {
        if(Auth::Check())
        {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if($validator->fails())
            {
                // return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
                return redirect()->back()->withErrors($validator, 'editPwd');
            }
            else
            {  
                $current_password = Auth::User()->password;
                $sesuai = Hash::check($request_data['current-password'], $current_password);  
                if($sesuai)
                {           
                    $user_id = Auth::User()->id;                       
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['password']);;
                    $obj_user->save(); 

                    Alert::success('Edit password sukses dilakukan', 'Sukses')->autoclose(3000);

                    $id = Auth::user()->id;
                    return redirect('/profile/{$id}');
                }
                else
                {           
                    $error = array('current-password' => 'Password lama tidak sesuai');
                    return redirect()->back()->withErrors($error, 'editPwd');  
                }
            }        
        }
        else
        {
            return redirect('/');
        }    
    }
}
