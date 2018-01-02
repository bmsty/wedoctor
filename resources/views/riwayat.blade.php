@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleRiwayat.css')}}">
@endsection

@section('content')
<!-- Riwayat -->
<section class="container-fluid about">
  <div class="container">
    <div class="row-center">
      <div class="col-md-12 about-colom text-left">
        <h1 style="margin-bottom: 0;">Riwayat</h1>
      </div>
    </div>
  </div>

  <div class="ukuran-tabel" style="width:98%;margin: auto;">
    <table class="table table-hover table-striped table-bordered table-condensed table-responsive">
      <thead>
        <tr>
          <th class="width-no">No.</th>
          <th class="width-nama">Nama Pasien</th>
          <th class="width-tgl">Tanggal Lahir</th>
          <th class="width-jk">Jenis Kelamin</th>
          <th class="width-alamat">Alamat</th>
          <th class="width-riwayat">Riwayat Sakit</th>
          <th class="width-tglobt">Tanggal Berobat</th>
          <th class="width-dokter">Dokter</th>
        </tr>
      </thead>
      <tbody>
        @foreach($riwayats as $riwayat)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $riwayat->nama_pasien }}</td>
            <td>{{ $riwayat->tanggal_lahir_pasien->format('d F Y') }}</td>
            <td>{{ $riwayat->jenis_kelamin_pasien }}</td>
            <td>{{ $riwayat->alamat_pasien }}</td>
            <td>{{ $riwayat->riwayat_sakit }}</td>
            <td>{{ $riwayat->tanggal_berobat->format('d F Y') }}</td>
            <td>{{ $riwayat->jadwal->doctors->nama_doctor }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>
@endsection