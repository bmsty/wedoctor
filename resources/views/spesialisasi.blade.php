@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleUpPage.css')}}">
@endsection

@section('content')
<section class="container-fluid booking">
  <div class="row">
    <div class="col-sm-12 header-booking">
      <h1>Pesan</h1>
    </div>
  </div>

  <div class="row">
    
    @foreach ($dataSpesialisasi as $spesialisasi)
    <div class="col-sm-6 col-lg-4">
      <div class="card border-card margin-card">
        <h4 class="card-header spesialisasi-background-title">{{ $spesialisasi->nama_spesialisasi }}</h4>
        <div class="card-body spesialisasi-background">
          <p class="card-text overflow-deskripsi">{{ $spesialisasi->deskripsi_spesialisasi }}</p>
          <a href="{{ url('/spesialisasi/doctor/'.$spesialisasi->id) }}"><button type="button" class="btn btn-outline-info float-right">Cari Dokter</button></a>
        </div>
      </div>
    </div>
    @endforeach

  </div>

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
</section>
@endsection






