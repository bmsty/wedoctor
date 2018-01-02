@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleDoctor.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindJadwal.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleUpPage.css')}}">
@endsection

@section('content')
<!-- Find Jadwal -->
<section class="container-fluid find-jadwal d-none d-md-block">
  <div class="row find-jadwal-row" style="min-height:150px;">
    <div class="col-xl-12 col-md-12 col-lg-12 find-jadwal-colom" style="min-height:150px;">
      <h1 class="text-center">Find Jadwal</h1>
      <p>Cari jadwal doktor di hari yang anda inginkan</p>
      <form action="" class="form-inline" method="GET">
        <select name="hari" class="form-control">
          <option value="Senin">Senin</option>
          <option value="Selasa">Selasa</option>
          <option value="Rabu">Rabu</option>
          <option value="Kamis">Kamis</option>
          <option value="Jumat">Jumat</option>
          <option value="Sabtu">Sabtu</option>
        </select>
        <button type="submit" class="btn btn-light my-2 my-sm-0 tombol">Search</button>
        
        @if ($errors->has('gagal'))
        <div>{{$errors->first('gagal')}}</div>
        @endif
      </form>
    </div>
  </div>

  <div class="row" style="padding-top:0;">
  @foreach ($jadwals as $jadwal)
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
            <h4 class="card-title">{{ $jadwal->doctors->nama_doctor }}</h4>
            <hr class="garis-batas">
            <table>
              <tr>
                <td width="100px" valign="top">Spesialisasi</td>
                <td width="20px" valign="top">: </td>
                <td>{{ $jadwal->doctors->spesialisasi->nama_spesialisasi }}</td>
              </tr>
              <tr>
                <td valign="top">Rating</td>
                <td valign="top">: </td>
                <td>{{ $jadwal->doctors->rating }}/5</td>
              </tr>
              <tr>
                <td valign="top">Alamat</td>
                <td valign="top">: </td>
                <td>{{ $jadwal->doctors->alamat_doctor }}</td>
              </tr>
              <tr>
                <td valign="top">Status</td>
                <td valign="top">: </td>
                <td>{{ $jadwal->doctors->status }}</td>
              </tr>
              <tr>
                <td valign="top">Hari</td>
                <td valign="top">: </td>
                <td>{{ $jadwal->hari }}</td>
              </tr>
              <tr>
                <td valign="top">Waktu</td>
                <td valign="top">: </td>
                <td>{{ $jadwal->waktu_mulai }} - {{ $jadwal->waktu_akhir }}</td>
              </tr>
            </table>
          </div>
          <div class="text-center">
            <a href="{{ url('/spesialisasi/doctor/doctorschedule/'.$jadwal->doctors->id) }}"><button type="button" class="btn btn-outline-info">Lihat Profil & Jadwal</button></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</section>

<!-- Doctor tablet smartphone -->
<section class="container-fluid doctor d-block d-md-none">
  <div class="row find-jadwal-row" style="min-height:150px;">
    <div class="col-xs-12 col-sm-12 find-jadwal-colom" style="min-height:150px;">
      <h1 class="text-center">Find Jadwal</h1>
      <p>Cari jadwal doktor di hari yang anda inginkan</p>
      <form action="" class="form-inline" method="GET">
        <select name="hari" class="form-control">
          <option value="NULL">-- Silahkan Pilih Hari --</option>
          <option value="Senin">Senin</option>
          <option value="Selasa">Selasa</option>
          <option value="Rabu">Rabu</option>
          <option value="Kamis">Kamis</option>
          <option value="Jumat">Jumat</option>
          <option value="Sabtu">Sabtu</option>
        </select>
        <button type="submit" class="btn btn-light my-2 my-sm-0 tombol">Search</button>
      </form>
    </div>
  </div>

  @foreach($jadwals as $jadwal)
  <div class="card margin-atas-dokter">
    <div class="card-body">
      <div class="foto background-profile d-none d-sm-block">
          <!-- Import background -->
          <div class="fotoprofile">
            <img class="rounded-circle" src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image">
          </div>
      </div>

      <div class="overflow-doctor">
      <h4 class="card-title text-center">{{ $jadwal->doctors->nama_doctor }}</h4>
      <hr class="garis-batas">
        <table>
          <tr>
            <td width="100px" valign="top">Spesialisasi</td>
            <td width="20px" valign="top">: </td>
            <td>{{ $jadwal->doctors->spesialisasi->nama_spesialisasi }}</td>
          </tr>
          <tr>
            <td valign="top">Rating</td>
            <td valign="top">: </td>
            <td>{{ $jadwal->doctors->rating }}/5</td>
          </tr>
          <tr>
            <td valign="top">Alamat</td>
            <td valign="top">: </td>
            <td>{{ $jadwal->doctors->alamat_doctor }}</td>
          </tr>
          <tr>
            <td valign="top">Status</td>
            <td valign="top">: </td>
            <td>{{ $jadwal->doctors->status }}</td>
          </tr>
          <tr>
            <td valign="top">Hari</td>
            <td valign="top">: </td>
            <td>{{ $jadwal->hari }}</td>
          </tr>
          <tr>
            <td valign="top">Waktu</td>
            <td valign="top">: </td>
            <td>{{ $jadwal->waktu_mulai }} - {{ $jadwal->waktu_akhir }}</td>
          </tr>
        </table>
      </div>
      <div class="text-center">
        <a href="{{ url('/spesialisasi/doctor/doctorschedule/'.$jadwal->doctors->id) }}"><button type="button" class="btn btn-outline-info">Lihat Profil & Jadwal</button></a>
      </div>
    </div>
  </div>
  @endforeach
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