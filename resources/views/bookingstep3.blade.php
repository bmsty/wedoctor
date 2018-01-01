@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleBookingStep3.css')}}">
@endsection

@section('content')
<!-- Booking Step 3 -->
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
      <h1 class="form-pasien" style="margin-bottom: 10px;">Sukses booking</h1>
      <p class="form-pasien-p">Silahkan simpan berkas yang sudah anda kirimkan ke email anda. Mohon berkas tersebut ditunjukkan ke petugas di lokasi.</p>
      <table style="margin-left: 20px;">
        <tr>
          <td valign="top" width="5px;"><b style="color:red;">*</b></td>
          <td><p class="form-pasien-p"> Jika anda tidak menemukan email yang kami kirimkan ke email anda, silahkan buka spam email anda, hal ini mungkin terjadi karna google menganggap aktivitas dari email kami sebagai spam, atau IP Address kami dianggap berbahaya</p></td>
        </tr>
      </table>
    </div>
  </div>
</section>
@endsection