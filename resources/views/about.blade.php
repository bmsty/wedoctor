@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
@endsection

@section('content')
<!-- About -->
<section class="container-fluid about">
  <div class="row about-row">
    <div class="col-sm-12 text-left about-colom">
      <h1>Tentang</h1>
      <p> WeDoct adalah sebuah sistem informasi yang didesain untuk mempermudah pasien dalam hal booking dokter. Sistem ini didesain untuk mengatasi masalah pasien dalam hal mengantri ketika hendak melakukan check-up atau control kesehatan dengan dokter. Selain itu, benefit yang ditawarkan oleh situs ini adalah sebagai berikut :</p>
      <ol>
        <li>Mencakup wilayah DI Yogyakarta</li>
        <li>Tempat control dari berbagai klinik / rumah sakit / puskesmas</li>
        <li>Dokter - dokter yang memiliki sertifikat</li>
        <li>Terintegrasi dengan Google Maps</li>
        <li>Terdapat berbagai pilihan dokter, dengan beragam spesialisasi</li>
      </ol>
      <hr color="#A9A9A9">
      <h4 class="text-left">Kebijakan</h4>
      <p>Kami menghargai privasi setiap orang yang mengunjungi situs web ini. Karenanya, kami bermaksud menyampaikan kepada Anda perihal bagaimana kami menggunakan data pribadi Anda. Kami sarankan agar Anda membaca kebijakan privasi ini sehingga Anda memahami pendekatan kami dalam menggunakan data pribadi Anda.
        <ol>
          <li><b>Kebijakan Privasi Online</b><br><p>Privasi ini hanya berlaku untuk aktivitas online kami dan berlaku bagi pengunjung situs kami dan mengenai informasi yang dibagi dan / atau dikumpulkan di sana. Kebijakan ini tidak berlaku untuk informasi yang dikumpulkan secara offline atau melalui saluran selain situs web ini.</p></li>
          <li><b>Persetujuan</b><br><p>Dengan mengirimkan data pribadi Anda kepada kami, maka Anda dianggap telah memberikan persetujuan Anda – sesuai kebutuhan dan sepatutnya – untuk pengungkapan yang dimaksud dalam kebijakan ini.</p></li>
          <li><b>Update</b><br><p>Kebijakan Privasi ini terakhir diperbaharui pada: Jumat, 1 Desember 2017.</br>Jika kami memperbarui, mengubah atau mengubah kebijakan privasi kami, perubahan tersebut akan diposkan di sini.</p></li>
        </ol></p>
        <hr color="#A9A9A9">
      <h4 class="text-left">Ketentuan Pemesanan</h4>
      <p>Berikut merupakan berbagai peraturan dan ketentuan yang perlu diperhatikan di dalam pemesanan dokter. Mohon baca catatan berikut dengan seksama. Jika Anda membutuhkan klarifikasi lebih lanjut, hubungi kami di wedoct.com.</p>
      <p>
        <ul>
          <li>Tiket Elektronik (E-Ticket) : Ingatlah bahwa Anda harus menyimpan salinan Tiket Elektronik ini sepanjang pemeriksaan kesehatan Anda karena Tiket Elektronik tersebut diperlukan untuk melakukan check-in.</li>
          <li>Untuk keperluan check-in, Anda harus menunjukkan Tiket Elektronik ini beserta dengan surat identifikasi yang dilampiri foto yang dikeluarkan oleh Pemerintah, seperti kartu identitas atau KTP Indonesia. </li>
          <li>Apabila data yang ada dalam E-Ticket berbeda dengan data yang ada pada sistem reservasi kami, maka yang menjadi acuannya adalah data yang ada pada sistem reservasi. </li>
          <li>Dengan memesan tiket ini, Anda setuju dan menerima semua syarat dan kondisi serta peraturan pembatalan dan pertukaran tiket ini.</li>
        </ul></p>
    </div>
  </div>
</section>
@endsection