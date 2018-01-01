@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindMaps.css')}}">
@endsection

@section('content')
<!-- Find Maps XL -->
<section class="container-fluid find-maps d-none d-xl-block">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Loaction</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9202.586608906147!2d110.41261047963654!3d-7.690055167333925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e970cd4fa51%3A0xa527d07122b90c40!2sIslamic+University+of+Indonesia!5e0!3m2!1sen!2sid!4v1512216933554" width="1004" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps LG -->
<section class="container-fluid find-maps d-none d-lg-block d-xl-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Loaction</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9202.586608906147!2d110.41261047963654!3d-7.690055167333925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e970cd4fa51%3A0xa527d07122b90c40!2sIslamic+University+of+Indonesia!5e0!3m2!1sen!2sid!4v1512216933554" width="795" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps MD -->
<section class="container-fluid find-maps d-none d-md-block d-lg-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Loaction</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9202.586608906147!2d110.41261047963654!3d-7.690055167333925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e970cd4fa51%3A0xa527d07122b90c40!2sIslamic+University+of+Indonesia!5e0!3m2!1sen!2sid!4v1512216933554" width="650" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps SM -->
<section class="container-fluid find-maps d-none d-sm-block d-md-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Loaction</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9202.586608906147!2d110.41261047963654!3d-7.690055167333925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e970cd4fa51%3A0xa527d07122b90c40!2sIslamic+University+of+Indonesia!5e0!3m2!1sen!2sid!4v1512216933554" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Find Maps XS -->
<section class="container-fluid find-maps d-block d-sm-none">
  <div class="row find-maps-row">
    <div class="col-sm-12 find-maps-colom">
      <h1 class="text-center">Find Loaction</h1>
      <p>Cari lokasi (rumah sakit, puskesmas, klinik, rumah praktek) yang anda tuju untuk mempermudah perjalanan anda dengan menekan tombol "View large maps" di pojok kiri atas maps ini</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9202.586608906147!2d110.41261047963654!3d-7.690055167333925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e970cd4fa51%3A0xa527d07122b90c40!2sIslamic+University+of+Indonesia!5e0!3m2!1sen!2sid!4v1512216933554" width="287" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>
@endsection