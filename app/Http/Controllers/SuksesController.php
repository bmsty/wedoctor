<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class SuksesController extends Controller
{
	public function alertUser()
	{
     	Alert::success('Anda Berhasil Login', 'Sukses')->autoclose(3000);

		return redirect('/home');
	}

	public function alertUserRegister()
	{
     	Alert::success('Anda Berhasil Registrasi Akun', 'Sukses')->autoclose(3000);

		return redirect('/home');
	}

	public function alertUserRating()
	{
     	Alert::success('Anda Berhasil memberikan rating', 'Sukses')->autoclose(3000);

		return redirect('/findrating');
	}
}
