@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleBookingStep2.css')}}">
@endsection

@section('content')
<!-- Booking Step 1 -->
<section class="container-fluid final-booking">
  <div class="row">
    <div class="col-sm-12 header-booking-final">
      <h1 class="text-center">Booking</h1>
    </div>
  </div>
  <div class="row final-booking-row justify-content-center align-items-center">
    <div class="pertama rounded-circle float-left">
      <h3 class="text-center angka">1</h3>
    </div>
    <div class="garis-booking1 float-left"> </div>
    <div class="kedua rounded-circle float-left">
      <h3 class="text-center angka">2</h3>
    </div>
    <div class="garis-booking2 float-left"> </div>
    <div class="ketiga rounded-circle float-left">
      <h3 class="text-center angka">3</h3>
    </div>
  </div>

  <!-- Content -->
  <div class="row final-booking-row-content justify-content-center align-items-center">
    <div class="col-sm-12">
      <h1 class="form-pasien">Data Diri Pasien</h1>
      <p class="form-pasien-p">Silahkan tekan tombol "Kirim" untuk mengirimkan data di bawah ini ke email anda.</p>
      <hr class="garis-content">
      
      <!-- Print data -->
      <div class="padding-booking">
        <h4 class="title-output">Data Pasien</h4>
        <table class="font-form">
          <tr>
            <td width=180px valign="top">Nama</td>
            <td width=15px valign="top">:</td>
            <td valign="top">{{ $pasien->nama_pasien }}</td>
          </tr>
          <tr>
            <td valign="top">Tanggal Lahir</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->tanggal_lahir_pasien->format('d F Y') }}</td>
          </tr>
          <tr>
            <td valign="top">Jenis Kelamin</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->jenis_kelamin_pasien }}</td>
          </tr>
          <tr>
            <td valign="top">Alamat</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->alamat_pasien }}</td>
          </tr>
          <tr>
            <td valign="top">Riwayat Penyakit</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->riwayat_sakit }}</td>
          </tr>
        </table>

        <h4 class="title-output">Data Doctor dan Berobat</h4>
        <table class="font-form">
          <tr>
            <td width=180px valign="top">Nomor Urut</td>
            <td width=15px valign="top">:</td>
            <td valign="top">{{ $pasien->no_urut }}</td>
          </tr>
          <tr>
            <td valign="top">Tanggal Berobat</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->tanggal_berobat->format('d F Y') }}</td>
          </tr>
          <tr>
            <td valign="top">Lokasi Berobat</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->jadwal->tempats->tempat }}</td>
          </tr>
          <tr>
            <td valign="top">Doctor Tujuan</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->jadwal->doctors->nama_doctor }}</td>
          </tr>
          <tr>
            <td valign="top">Waktu Masuk Ruangan</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->waktu_masuk }}</td>
          </tr><tr>
            <td valign="top">Waktu Aman Sudah Harus di Lokasi</td>
            <td valign="top">:</td>
            <td valign="top">{{ $pasien->waktu_aman }}</td>
          </tr>
        </table>
      </div>
      
      <!-- Button -->
      <div class="form-group button-margin text-left">
        <a href="{{ url('/sendmail/'.$pasien->id) }}"><button type="button" class="btn btn-light">Kirim Email</button></a>
      </div>
    </div>
  </div>
</section>
@endsection