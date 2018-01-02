@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
@endsection

@section('contentadmin')
<!-- Admin Spesialisasi -->
<section class="container-fluid about" style="min-height: 300px;">
    <div class="row-center">
      <div class="col-sm-12 about-colom text-left clearfix">
        <h1>Edit Doctor</h1>

        <form class="form-edit" action="{{ url('/admin/doctor/edit/'.$dataDoctor->id) }}" method="POST">
          {{ csrf_field() }}

          <!-- Nama Doctor -->
          <div class="form-group row">
            <label for="nama_doctor" class="col-sm-2 col-form-label"><b>Nama Doctor</b></label>
            <div class="col-sm-10">
              <input name="nama_doctor" type="text" class="form-control{{ $errors->has('nama_doctor') ? ' is-invalid' : '' }}" id="nama_doctor" value="{{ $dataDoctor->nama_doctor }}">

              @if($errors->has('nama_doctor'))
                <div class="invalid-feedback">
                  @foreach($errors->get('nama_doctor') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

          <!-- Alamat Doctor -->
          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label"><b>Alamat Doctor</b></label>
            <div class="col-sm-10">
              <textarea name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" id="alamat" rows="3">{{ $dataDoctor->alamat_doctor }}</textarea>

              @if($errors->has('alamat'))
                <div class="invalid-feedback">
                  @foreach($errors->get('alamat') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

          <!-- Status -->
          <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label"><b>Status Doctor</b></label>
            <div class="col-sm-10">
              <textarea name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" rows="3">{{ $dataDoctor->status }}</textarea>

              @if($errors->has('status'))
                <div class="invalid-feedback">
                  @foreach($errors->get('status') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

            <button type="submit" class="btn btn-outline-info float-right">Edit</button>

          <input type="hidden" name="_method" value="PUT">
        </form>
      </div>
  </div>
</section>
@endsection

@section('jsadmin')
<script>
  $('.form-edit').submit(function (e)
  {
    var form = this;
    e.preventDefault();
    swal
    ({
      title: 'Apa anda yakin?',
      text: "Ini akan mengubah data yang ada di database",
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