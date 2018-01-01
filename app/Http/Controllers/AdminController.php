<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use DB;
use Auth; 
use App\Spesialisasi;
use App\Doctor;
use App\Tempat;
use App\User;
use App\Jadwal;
use App\Rating;
use App\Pasien;
use Alert;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function alertAdmin()
    {
        Alert::success('Anda Berhasil Login', 'Sukses')->autoclose(3000);

        return redirect('/admin');
    }

    public function getViewHome()
    {
        return view('admin');
    }

    public function getViewSpesialisasi()
    {
        $dataSpesialisasi = Spesialisasi::all();
        return view('adminspesialisasi')->with('dataSpesialisasi',$dataSpesialisasi)->with('no',1);
    }

    public function getViewEditSpesialisasi($id)
    {
        $spesialisasi = Spesialisasi::where('id','=',$id)->first();

        return view('adminspesialisasiedit')->with('dataSpesialisasi',$spesialisasi);
    }

    public function editSpesialisasi(Request $request, $id)
    {
        $this->validate($request,[
            'nama_spesialisasi' => 'required',
            'deskripsi_spesialisasi' => 'required',
        ]);

        $spesialisasi = Spesialisasi::find($id);

            $spesialisasi->nama_spesialisasi = $request->nama_spesialisasi;
            $spesialisasi->deskripsi_spesialisasi = $request->deskripsi_spesialisasi;

        $spesialisasi->save();

        $spesialisasi_tampil = $spesialisasi->nama_spesialisasi;

        Alert::success($spesialisasi_tampil.' berhasil diubah', 'Sukses')->autoclose(3000);

        return redirect('/admin/spesialisasi');
    }

    public function getViewTambahSpesialisasi()
    {
        return view('adminspesialisasitambah');
    }

    public function getViewDoctor()
    {
        $dataDoctor = Doctor::all();
        return view('admindoctor')->with('dataDoctor',$dataDoctor)->with('no',1);
    }

    public function getViewEditDoctor($id)
    {
        $doctor = Doctor::where('id','=',$id)->first();
        return view('admindoctoredit')->with('dataDoctor',$doctor);
    }

    public function editDoctor(Request $request, $id)
    {
        $this->validate($request,[
            'nama_doctor' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        $doctor = Doctor::find($id);

            $doctor->nama_doctor = $request->nama_doctor;
            $doctor->alamat_doctor = $request->alamat;
            $doctor->status = $request->status;

        $doctor->save();

        $doctor_tampil = $doctor->nama_doctor;

        Alert::success($doctor_tampil.' berhasil diubah', 'Sukses')->autoclose(3000);

        return redirect('/admin/doctor');
    }

    public function getViewTambahDoctor()
    {
        return view('admindoctortambah')->with('spesialisasi_nama',Spesialisasi::all())->with('tempat',Tempat::all());
    }

    public function getViewUser()
    {
        $users = User::where('id','>','1')->get();

        return view('adminuser')->with('users',$users)->with('no',1);
    }

    public function deleteUser($id)
    {

        Pasien::where('user_id','=',$id)->delete();
        Rating::where('user_id','=',$id)->delete();

        $user = User::find($id);
        $user->delete();

        $user_tampil = $user->nama;

        Alert::success($user_tampil.' berhasil dihapus', 'Sukses')->autoclose(3000);

        return redirect('/admin/user');
    }

    public function tambahSpesialisasi(Request $request)
    {
        $this->validate($request,[
            'nama_spesialisasi' => 'required',
            'deskripsi_spesialisasi' => 'required',
        ]);

        $spesialisasi = new Spesialisasi;

            $spesialisasi->nama_spesialisasi = $request->nama_spesialisasi;
            $spesialisasi->deskripsi_spesialisasi = $request->deskripsi_spesialisasi;

        $spesialisasi->save();

        $spesialisasi = $request->nama_spesialisasi;

        Alert::success($spesialisasi.' ditambahkan', 'Sukses')->autoclose(3000);

        return redirect('/admin/spesialisasi');
    }

    public function deleteSpesialisasi($id)
    {

        $dokter_id = Doctor::where('spesialisasi_id','=',$id)->get();
        foreach($dokter_id as $dokter)
        {
            Rating::where('doctor_id','=',$dokter->id)->delete();
            $jadwal_id = Jadwal::where('doctor_id','=',$dokter->id)->get();
            foreach($jadwal_id as $jadwal)
            {
                Pasien::where('jadwal_id','=',$jadwal->id)->delete();
            }    
            Jadwal::where('doctor_id','=',$dokter->id)->delete();
        }

        $foreignkey_doctor = Doctor::where('spesialisasi_id','=',$id);
        $foreignkey_doctor->delete();

        $spesialisasi = Spesialisasi::find($id);
        $spesialisasi->delete();

        $spesialisasi_tampil = $spesialisasi->nama_spesialisasi;

        Alert::success($spesialisasi_tampil.' berhasil dihapus', 'Sukses')->autoclose(3000);

        return redirect('/admin/spesialisasi');
    }

    public function tambahDoctor(Request $request)
    {        
        $this->validate($request,[
            'nama_doctor' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'spesialisasi' => 'required|not_in:null',
            'hari' => 'required|not_in:null',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_akhir' => 'required|date_format:H:i|after:waktu_mulai',
            'tempat' => 'required|not_in:null',
        ]);

        $doctor = Doctor::create([
            'nama_doctor' => $request->nama_doctor,
            'alamat_doctor' => $request->alamat,
            'status' => $request->status,
            'spesialisasi_id' => $request->spesialisasi,
        ]);

        // for($i=0 ; $i<3; $i++)
        // { 
            // $jadwal = Jadwal::create([
            //     'doctor_id' => $doctor->id,
            //     'hari' => $request->hari[$i],
            //     'waktu_mulai' => $request->waktu_mulai[$i],
            //     'waktu_akhir' => $request->waktu_akhir[$i],
            //     'tempat_id' => $request->tempat[$i]
            // ]);
        // }
        
        $jadwal = Jadwal::create([
            'doctor_id' => $doctor->id,
            'hari' => $request->hari,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_akhir' => $request->waktu_akhir,
            'tempat_id' => $request->tempat
        ]);

        $doctor_tampil = $request->nama_doctor;

        Alert::success($doctor_tampil.' ditambahkan', 'Sukses')->autoclose(3000);

        return redirect('/admin/doctor');
    }

    public function deleteDoctor($id)
    {
        
        $foreignkey_rating = Rating::where('doctor_id','=',$id);
        $foreignkey_rating->delete();

        $jadwal_id = Jadwal::where('doctor_id','=',$id)->get();
        foreach($jadwal_id as $jadwal)
        {
            Pasien::where('jadwal_id','=',$jadwal->id)->delete();
        }

        $foreignkey_jadwal = Jadwal::where('doctor_id','=',$id);
        $foreignkey_jadwal->delete();

        $doctor = Doctor::find($id);
        $doctor->delete();

        $doctor_tampil = $doctor->nama_doctor;

        Alert::success($doctor_tampil.' berhasil dihapus', 'Sukses')->autoclose(3000);

        return redirect('/admin/doctor');
    }
}
