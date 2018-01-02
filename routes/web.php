<?php

// Routing untuk GUEST
    Route::get('/', 'GuestViewController@getViewHome');
    Route::get('/about', 'GuestViewController@getViewAbout');
    Route::get('/howtobooking', 'GuestViewController@getViewHowToBooking');
    Route::get('/signin', 'GuestViewController@getViewSignIn');
    Route::get('/signup', 'GuestViewController@getViewSignUp');
    Route::get('/findmaps', 'GuestViewController@getViewFindMaps');
    Route::get('/findjadwal', 'GuestViewController@getViewFindJadwal');

    Route::get('/cekakun', 'GuestViewController@getViewCekAkun');
    Route::get('/spesialisasi', 'GuestViewController@getViewSpesialisasi');
    Route::get('/spesialisasi/doctor/{id}', 'GuestViewController@getViewDoctor');
    Route::get('/spesialisasi/doctor/doctorschedule/{id}', 'GuestViewController@getViewDoctorSchedule');

// Autentikasi untuk login dan register otomatis
    Auth::routes();

// Routing untuk kalo dah registrasi dan login
    Route::get('/prosesUser', 'SuksesController@alertUser');
    Route::get('/prosesAdmin', 'AdminController@alertAdmin');
    Route::get('/prosesSignup', 'SuksesController@alertUserRegister');
    Route::get('/prosesRating', 'SuksesController@alertUserRating');

    Route::get('/home', 'HomeController@getView')->name('home');
    Route::get('/admin', 'AdminController@getViewHome')->name('admin');

    Route::get('/bookingstep1/{id}', 'BookingController@getViewStep1');
    Route::post('/prosesbookingstep1', 'BookingController@proses1');

    Route::post('/bookingstep2', 'BookingController@getViewStep2'); 
    // Route::post('/prosesbookingstep2', 'BookingController@proses2'); 

    Route::get('/bookingstep3', 'BookingController@getViewStep3');

    Route::get('/findrating', 'BookingController@getViewFindRating');
    Route::post('/submitrating', 'BookingController@submitrating');

    Route::get('/riwayat', 'BookingController@getViewRiwayat');
    Route::get('/profile/{id}', 'BookingController@getViewProfile');
    Route::put('/profile/{id}', 'BookingController@editProfile');

    Route::post('/profile/password', 'BookingController@editPassword');

// Routing ADMIN SPESIALISASI
    Route::get('/admin/spesialisasi', 'AdminController@getViewSpesialisasi');
    Route::get('/admin/spesialisasi/edit/{id}', 'AdminController@getViewEditSpesialisasi');
    Route::put('/admin/spesialisasi/edit/{id}', 'AdminController@editSpesialisasi');
    Route::get('/admin/spesialisasi/tambah', 'AdminController@getViewTambahSpesialisasi');
    Route::post('/admin/spesialisasi/tambah', 'AdminController@tambahSpesialisasi');
    Route::delete('/admin/spesialisasi/delete/{id}', 'AdminController@deleteSpesialisasi');

// Routing ADMIN DOCTOR
    Route::get('/admin/doctor', 'AdminController@getViewDoctor');
    Route::get('/admin/doctor/edit/{id}', 'AdminController@getViewEditDoctor');
    Route::put('/admin/doctor/edit/{id}', 'AdminController@editDoctor');
    Route::get('/admin/doctor/tambah', 'AdminController@getViewTambahDoctor');
    Route::post('/admin/doctor/tambah', 'AdminController@tambahDoctor');
    Route::delete('/admin/doctor/delete/{id}', 'AdminController@deleteDoctor');

// Routing ADMIN USER
    Route::get('/admin/user', 'AdminController@getViewUser');
    Route::delete('/admin/user/delete/{id}', 'AdminController@deleteUser');

// Routing Mail Sending
    Route::get('/sendmail/{pasien}', 'SendEmailController@sendmail');

