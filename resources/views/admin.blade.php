@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHome1.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHomeAdmin.css')}}">
@endsection

@section('contentadmin')
<!-- Home Admin -->
<section class="container-fluid" style="padding:0">
  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-success" role="alert" style="margin-bottom:8px;height: 50px;">
        <!-- TAG MARQUEE INI UNTUK ANIMASI TEKS BERJALAN-->
        <marquee>Selamat datang <strong>{{ Auth::user()->nama }}</strong> di halaman admin We Doctor</b></marquee>
      </div>
    </div>
  </div>

  <div class="home col-md-12">
    <!-- Import gambar background lewat css -->
  </div>

</section>
@endsection