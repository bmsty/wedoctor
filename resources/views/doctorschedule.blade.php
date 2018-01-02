@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleDoctorSchedule.css')}}">
@endsection

@section('content')
<!-- Booking Doctor -->
<section class="container-fluid doctor-schedule">
  <div class="row doctor-schedule-row">
    <div class="col-sm-12 header-doctor-schedule">
      <h1>Jadwal Dokter</h1>
    </div>
  </div>

  <form action="{{ url('/prosesbookingstep1') }}" method="POST">
    {{ csrf_field() }}
    <div class="row doctor-schedule-row justify-content-lg-center">
      <div class="col-sm-12 card-padding">
        <div class="card">
          <h4 class="card-header card-header-font">Profil Doctor</h4>
          <div class="card-body">
            <div class="card-kiri float-left text-center d-none d-md-block">
              <!-- Import background -->
              <img src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image" class="rounded-circle pict-doctor">
            </div>
            <div class="card-kanan float-left">
              <h4 class="margin-top-card-title">{{ $doctor->nama_doctor }}</h4>
              <table class="card-text">
                <tr>
                  <td width="100px">Spesialisasi</td>
                  <td width="20px">: </td>
                  <td>{{ $doctor->spesialisasi->nama_spesialisasi }}</td>
                </tr>
                <tr>
                  <td>Rating</td>
                  <td>: </td>
                  <td>{{ $doctor->rating }}</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>: </td>
                  <td>{{ $doctor->alamat_doctor }}</td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>: </td>
                  <td>{{ $doctor->status }}</td>
                </tr>
              </table>
              <!-- Sertifikat -->
              <h4 class="card-title" style="display: inline-block;margin-right: 10px;">Sertifikat Dokter</h4>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg" style="border-radius: 24px;padding-top: 0;padding-bottom: 0;">Lihat</button>
              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Sertifikat {{ $doctor->nama_doctor }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="img-thumbnail sertifikat" src="{{asset('/img/booking/doctor/sertifikat.jpg')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Jadwal -->
              <h4 class="card-title" style="margin-top:0;">Jadwal Dokter</h4>
                @foreach($jadwals as $jadwal)
                  <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                      <input id="jadwalDoctor" name="jadwalDoctor" type="radio" class="custom-control-input{{ $errors->has('jadwalDoctor') ? ' is-invalid' : '' }}" value="{{ $jadwal->id }}">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description custom-control-description-font">{{ $jadwal->hari }} : {{ $jadwal->waktu_mulai }} - {{ $jadwal->waktu_akhir }} ({{ $jadwal->tempats->tempat }})</span>
                    </label>
                  </div>
                @endforeach 
                
                @if($errors->has('jadwalDoctor'))
                  <div class="alert alert-danger" style="padding:0;padding-left:5px;margin:0;">
                    Anda belum memilih jadwal
                  </div>
                @endif


            </div>
            <div class="pemanis clearfix">
              <!-- Pemanis -->
            </div>
          </div>
          <div class="card-footer text-center">
            @guest
              <a href="{{ url('/howtobooking') }}"><button type="button" class="btn btn-outline-info">Daftar?</button></a>
            @else
              <button type="submit" class="btn btn-outline-info">Daftar</button></a>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
@endsection