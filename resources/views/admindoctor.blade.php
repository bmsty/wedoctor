@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAdminSpesialisasis.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAdminDoctor.css')}}">
@endsection

@section('contentadmin')
<!-- Admin Spesialisasi -->
<section class="container-fluid about">
  <div class="row-center">
    <div class="col-sm-12 about-colom text-left clearfix">
      <h1>Doctor</h1>

      <table class="table table-hover table-striped table-bordered table-condensed table-responsive">
        <thead>
          <tr>
            <th class="width-no">No.</th>
            <th class="width-nama">Nama Doctor</th>
            <th class="width-alamat">Alamat Doctor</th>
            <th class="width-status">Status Doctor</th>
            <th class="width-spesialisasi">Spesialisasi Doctor</th>
            <th colspan="2" width="90px" align="center"><a href="{{ url('/admin/doctor/tambah') }}"><button type="button" class="btn btn-outline-info tombolnya clearfix">Tambah</button></a></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataDoctor as $doctor)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $doctor->nama_doctor }}</td>
            <td>{{ $doctor->alamat_doctor }}</td>
            <td>{{ $doctor->status }}</td>
            <td>{{ $doctor->spesialisasi->nama_spesialisasi }}</td>
            <td>

              <a href="{{ url('/admin/doctor/edit/'.$doctor->id) }}"><button type="button" class="btn btn-outline-info float-right clearfix"><img src="{{asset('/img/icon/edit.png')}}" alt="Error load image"></button></a>

            </td>
            <td>
              <form class="form-delete" action="{{ url('/admin/doctor/delete/'.$doctor->id) }}" method="POST">
                {{csrf_field()}}
                <button type="submit" class="btn btn-outline-info float-right clearfix"><img src="{{asset('/img/icon/delete.png')}}" alt="Error load image"></button>
                <input type="hidden" name="_method" value="DELETE">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection

@section('jsadmin')
<script>
  $('.form-delete').submit(function (e)
  {
    var form = this;
    e.preventDefault();
    swal
    ({
      title: 'Apa anda yakin?',
      text: "Ini akan menghapus secara permanent",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yakin',
      cancelButtonText: 'Tidak'
    }, 
    function (result) 
    {
      if (result) 
      {
        form.submit();
      }
    });
  });
</script>
@endsection