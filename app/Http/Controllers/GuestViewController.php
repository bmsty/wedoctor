<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Spesialisasi;
use App\Jadwal;
use App\Doctor;
use App\Tempat;

class GuestViewController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getViewHome()
    {
        return view('home');
    }

    public function getViewAbout()
    {
        return view('about');
    }

    public function getViewHowToBooking()
    {
        return view('howtobooking');
    }

    public function getViewSignIn()
    {
        return redirect('/login');
    }

    public function getViewSignUp()
    {
        return redirect('/register');
    }

    public function getViewFindMaps()
    {
        return view('findmaps');
    }

    public function getViewFindJadwal(Request $request)
    {
        // query untuk akses name=hari yang ada di form findjadwal dengan method get
        $hari = $request->query('hari');
        $jadwals = Jadwal::where('hari', $hari)->get();
        return view('findjadwal', ['jadwals' => $jadwals]); 
    }

    public function getViewCekAkun()
    {
        return view('cekakun');
    }

    public function getViewSpesialisasi()
    {
        // Untuk akses database
        $dataSpesialisasi = DB::table('spesialisasis')->get();
        return view('spesialisasi', ['dataSpesialisasi' => $dataSpesialisasi]);
    }

    public function getViewDoctor(Spesialisasi $id)
    {
        $doctors = $id->doctors()->get();
        return view('doctor', ['doctors' => $doctors]);
    }

    public function getViewDoctorSchedule($id)
    {
        $doctors = Doctor::find($id);
        $jadwals = Jadwal::where('doctor_id','=',$id)->get();

        return view('doctorschedule', ['doctor' => $doctors, 'jadwals' => $jadwals]);
    }
}
