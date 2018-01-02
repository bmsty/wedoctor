@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleUpPage.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleDoctor.css')}}">
@endsection

@section('content')
<!-- Doctor medium up -->
<section class="container-fluid doctor d-none d-md-block">
  <div class="row docktor-row">
    <div class="col-sm-12 header-doctor">
      <h1>Dokter</h1>
    </div>
  </div>

  <div class="row">
  @foreach($doctors as $doctor)
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
      <div class="card border-card">
        <div class="background-profile">
          <!-- Import background -->
          <div class="fotoprofile">
            <img class="rounded-circle" src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image">
          </div>
        </div>

        <div class="card-body spesialisasi-background">
          <div class="overflow-doctor">
            <h4 class="card-title">{{ $doctor->nama_doctor }}</h4>
            <hr class="garis-batas">
            <table>
              <tr>
                <td width="100px" valign="top">Spesialisasi</td>
                <td width="20px" valign="top">: </td>
                <td>{{ $doctor->spesialisasi->nama_spesialisasi }}</td>
              </tr>
              <tr>
                <td valign="top">Rating</td>
                <td valign="top">: </td>
                <td>{{ $doctor->rating }}/5</td>
              </tr>
              <tr>
                <td valign="top">Alamat</td>
                <td valign="top">: </td>
                <td>{{ $doctor->alamat_doctor }}</td>
              </tr>
              <tr>
                <td valign="top">Status</td>
                <td valign="top">: </td>
                <td>{{ $doctor->status }}</td>
              </tr>
            </table>
          </div>
          <div class="text-center">
            <a href="{{ url('/spesialisasi/doctor/doctorschedule/'.$doctor->id) }}"><button type="button" class="btn btn-outline-info">Lihat Profil & Jadwal</button></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</section>

<!-- Doctor tablet smartphone -->
<section class="container-fluid doctor d-block d-md-none">
  <div class="row docktor-row">
    <div class="col-sm-12 header-doctor">
      <h1>Dokter</h1>
    </div>
  </div>

  @foreach($doctors as $doctor)
  <div class="card margin-atas-dokter">
    <div class="card-body">
      <div class="foto background-profile d-none d-sm-block">
          <!-- Import background -->
          <div class="fotoprofile">
            <img class="rounded-circle" src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image">
          </div>
      </div>

      <div class="overflow-doctor">
      <h4 class="card-title text-center">{{ $doctor->nama_doctor }}</h4>
      <hr class="garis-batas">
        <table>
          <tr>
            <td width="100px" valign="top">Spesialisasi</td>
            <td width="20px" valign="top">: </td>
            <td>{{ $doctor->spesialisasi->nama_spesialisasi }}</td>
          </tr>
          <tr>
            <td valign="top">Rating</td>
            <td valign="top">: </td>
            <td>{{ $doctor->rating }}/5</td>
          </tr>
          <tr>
            <td valign="top">Alamat</td>
            <td valign="top">: </td>
            <td>{{ $doctor->alamat_doctor }}</td>
          </tr>
          <tr>
            <td valign="top">Status</td>
            <td valign="top">: </td>
            <td>{{ $doctor->status }}</td>
          </tr>
        </table>
      </div>
      <div class="text-center">
        <a href='/spesialisasi/doctor/doctorschedule/{{$doctor->id}}'><button type="button" class="btn btn-outline-info">Lihat Profil & Jadwal</button></a>
      </div>
    </div>
  </div>
  @endforeach
</section>

  <div class="up">
    <a href="#" id="up"><img src="{{asset('/img/up/up.png')}}" alt="Error load image" onclick="scrolltotop()"></a>
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