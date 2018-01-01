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
        <h1>Tambah Spesialisasi</h1>

        <form action="{{ url('/admin/spesialisasi/tambah') }}" method="POST">
          {{ csrf_field() }}

          <!-- Nama Spesialisasi -->
          <div class="form-group row">
            <label for="nama_spesialisasi" class="col-sm-2 col-form-label"><b>Nama Spesialisasi</b></label>
            <div class="col-sm-10">
              <input name="nama_spesialisasi" type="text" class="form-control{{ $errors->has('nama_spesialisasi') ? ' is-invalid' : '' }}" id="nama_spesialisasi" value="{{ old('nama_spesialisasi') }}">

              @if($errors->has('nama_spesialisasi'))
                <div class="invalid-feedback">
                  @foreach($errors->get('nama_spesialisasi') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

          <!-- Deskripsi Spesialisasi -->
          <div class="form-group row">
            <label for="deskripsi_spesialisasi" class="col-sm-2 col-form-label"><b>Deskripsi Spesialisasi</b></label>
            <div class="col-sm-10">
              <textarea name="deskripsi_spesialisasi" class="form-control{{ $errors->has('deskripsi_spesialisasi') ? ' is-invalid' : '' }}" id="deskripsi_spesialisasi" rows="3">{{ old('deskripsi_spesialisasi') }}</textarea>

              @if($errors->has('deskripsi_spesialisasi'))
                <div class="invalid-feedback">
                  @foreach($errors->get('deskripsi_spesialisasi') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

          <button type="submit" class="btn btn-outline-info float-right">Tambah</button>
        </form>

      </div>
    </div>
</section>
@endsection