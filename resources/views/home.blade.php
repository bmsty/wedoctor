@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHome1.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHome3.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFooter.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleUpPage.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFooterCopyright.css')}}">
@endsection

@section('content')

@auth
<div class="alert alert-success" role="alert"  style="margin-bottom:8px;height: 50px;">
  <div class="text-left">
    <!-- TAG MARQUEE INI UNTUK ANIMASI TEKS BERJALAN-->
    <marquee>Selamat datang <b>{{ Auth::user()->nama }}</b></marquee>
  </div>
</div>
@endauth

<!-- Isi home 1 (HOME) -->
<div class="home col-sm-12">
    <!-- Import gambar background lewat css -->
  <div class="home1">
    <h1>Apa itu WeDoct?</h1>
    <p>WeDoct adalah sebuah sistem informasi yang didesain untuk mempermudah pasien dalam hal booking dokter. Kenapa harus WeDoct? </p>
    <p><a class="readMore" href="{{ url('/about') }}">Selengkapnya >></a></p>
  </div>
</div>

<!-- Isi home 3 (FEATURES Tablet ke atas) -->
<section class="container-fluid fitur-home d-none d-md-block">
  <div class="row fitur-row align-items-center">
    <div class="lokasi col-sm-2 offset-sm-2 text-center">
      <figure class="figure">
        <a href="{{ url('/findmaps') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/location.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption">Cari Lokasi</figcaption>
      </figure>
    </div>
    <div class="col-sm-1">
      <div class="garis-vertical">
        <!-- Garis Vertical -->
      </div>
    </div>
    <div class="jadwal col-sm-2 text-center">
      <figure class="figure">
        <a href="{{ url('/findjadwal') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/jadwal.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption">Cari Jadwal Dokter</figcaption>
      </figure>
    </div>
    <div class="col-sm-1">
      <div class="garis-vertical">
         <!-- Garis Vertical -->
      </div>
    </div>
    <div class="feedback col-sm-2 text-center">
      <figure class="figure">
        <a href="{{ url('/findrating') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/feedback.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption">Berikan Rating Dokter</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- FEATURES Tablet -->
<section class="container-fluid fitur-home d-none d-sm-block d-md-none">
  <div class="row fitur-row align-items-center justify-content-sm-center">
    <div class="lokasi col-sm-3 text-center">
      <figure class="figure">
        <a href="{{ url('/findmaps') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/location.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption">Cari Lokasi</figcaption>
      </figure>
    </div>
    <div class="jadwal col-sm-3 text-center">
      <figure class="figure">
        <a href="{{ url('/findjadwal') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/jadwal.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption">Cari Jadwal Dokter</figcaption>
      </figure>
    </div>
    <div class="feedback col-sm-3 text-center">
      <figure class="figure">
        <a href="{{ url('/findrating') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/feedback.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption">Berikan Rating Dokter</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- FEATURES SmartPhone -->
<section class="container-fluid fitur-home d-block d-sm-none">
  <div class="row fitur-row align-items-center justify-content-sm-center">
    <div class="lokasi col-md-12 text-center">
      <figure class="figure">
        <a href="{{ url('/findmaps') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/location.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption margin-caption">Cari Lokasi</figcaption>
      </figure>
    </div>
    <div class="jadwal col-md-12 text-center margin-features">
      <figure class="figure">
        <a href="{{ url('/findjadwal') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/jadwal.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption margin-caption">Cari Jadwal Dokter</figcaption>
      </figure>
    </div>
    <div class="feedback col-md-12 text-center">
      <figure class="figure">
        <a href="{{ url('/findrating') }}"><img class="fitur-image" src="{{asset('/img/home/fitur/feedback.png')}}" alt="Error load image"></a>
        <figcaption class="figure-caption margin-caption">Berikan Rating Dokter</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Footer Tablet hingga Laptop -->
<section class="container-fluid footer d-none d-md-block">
  <div class="row footer-row justify-content-md-center">
    <div class="col-sm-4 garis text-center">
      <h2>Kebijakan</h2>
      <p class="text-center bawah">Kami menghargai privasi setiap orang yang mengunjungi situs web ini. Karenanya, kami bermaksud menyampaikan kepada Anda perihal bagaimana kami menggunakan data pribadi Anda.</p>
      <a class="readMore" href="{{ url('/about') }}">Selengkapnya >></a>
    </div>
    <div class="col-sm-4 garis text-center">
      <h2>Ketentuan</h2>
      <p class="bawah">Berikut merupakan berbagai peraturan dan ketentuan yang perlu diperhatikan di dalam pemesanan dokter.</p>
      <a class="readMore" href="{{ url('/about') }}">Selengkapnya >></a>
    </div>
    <div class="col-sm-4 text-center">
      <h2>Kontak</h2>
      <p class="text-center bawah">Jalan Kaliurang KM 14,5, Umbulmartani, Ngemplak, Umbulmartani, Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584.</p>
      <p class="text-center bawah">Telp (0274) 868584</p>
      <p class="text-center bawah">WeDoct.com</p>
    </div>
  </div>
</section>

<!-- FOOTER Tablet -->
<section class="container-fluid footer-fluid d-block d-md-none">
  <div id="accordion" role="tablist">
    <div class="card">
      <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
          <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Kebijakan
          </a>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <p>Kami menghargai privasi setiap orang yang mengunjungi situs web ini. Karenanya, kami bermaksud menyampaikan kepada Anda perihal bagaimana kami menggunakan data pribadi Anda. Kami sarankan agar Anda membaca kebijakan privasi ini sehingga Anda memahami pendekatan kami dalam menggunakan data pribadi Anda.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab" id="headingTwo">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Ketentuan
          </a>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <p>Berikut merupakan berbagai peraturan dan ketentuan yang perlu diperhatikan di dalam pemesanan dokter.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Kontak
          </a>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          <p>Jalan Kaliurang KM 14,5, Umbulmartani, Ngemplak, Umbulmartani, Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584.</p>
          <p>Telp (0274) 868584</p>
          <p>WeDoct.com</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="up">
  <a id="up"><img src="{{asset('/img/up/up.png')}}" alt="Error load image" onclick="scrolltotop()"></a>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $(window).scroll(function(){
    if ($(window).scrollTop() > 100) {
      $('#tombolScrollTop').fadeIn();
    } else {
      $('#tombolScrollTop').fadeOut();
    }
  });
});

function scrolltotop()
{
  $('html, body').animate({scrollTop : 0},500);
}
</script>
@endsection

@section('js')
<!-- <script type="text/javascript" src="{{asset('/js/toUpPage.js')}}"></script> -->
@endsection