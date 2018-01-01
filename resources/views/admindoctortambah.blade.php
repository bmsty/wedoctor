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
        <h1>Tambah Doctor</h1>

        <form action="{{ url('/admin/doctor/tambah') }}" method="POST">
          {{ csrf_field() }}

          <!-- Nama Doctor -->
          <div class="form-group row">
            <label for="nama_doctor" class="col-sm-2 col-form-label"><b>Nama Doctor</b></label>
            <div class="col-sm-10">
              <input name="nama_doctor" type="text" class="form-control{{ $errors->has('nama_doctor') ? ' is-invalid' : '' }}" id="nama_doctor" value="{{ old('nama_doctor') }}">

              @if($errors->has('nama_doctor'))
                <div class="invalid-feedback">
                  @foreach($errors->get('nama_doctor') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

          <!-- Spesialisasi -->
          <div class="form-group row">
            <label for="spesialisasi_id" class="col-sm-2 col-form-label"><b>Spesialisasi Doctor</b></label>
            <div class="col-sm-10">
              <select name="spesialisasi" class="form-control{{ $errors->has('spesialisasi') ? ' is-invalid' : '' }}">
                <option value="null">-- Silahkan Pilih Spesialisasi --</option>
                @foreach($spesialisasi_nama as $nama)
                  <option value="{{$nama->id}}">{{ $nama->nama_spesialisasi }}</option>
                @endforeach
              </select>

              @if($errors->has('spesialisasi'))
                <div class="invalid-feedback">
                  @foreach($errors->get('spesialisasi') as $message)
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
              <textarea name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" id="alamat" rows="3">{{old('alamat')}}</textarea>

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
              <textarea name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" rows="3"></textarea>

              @if($errors->has('status'))
                <div class="invalid-feedback">
                  @foreach($errors->get('status') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>
          </div>

          <!-- Jadwal 1 -->
          <div class="form-group row">
            <label for="jadwal_doctor" class="col-sm-2 col-form-label"><b>Jadwal Doctor</b></label>
            <div class="col-sm-3">
              <select name="hari" class="form-control{{ $errors->has('hari') ? ' is-invalid' : '' }}">
                <option value="null">-- Silahkan Pilih Hari --</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
              </select>

              @if($errors->has('hari'))
                <div class="invalid-feedback">
                  @foreach($errors->get('hari') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>

            <div class="col-sm-2">
              <input name="waktu_mulai" type="time" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" id="waktu_mulai" data-toggle="tooltip" data-placement="bottom" title="Waktu Mulai">

              @if($errors->has('waktu_mulai'))
                <div class="invalid-feedback">
                  @foreach($errors->get('waktu_mulai') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>

            <div class="col-sm-2">
              <input name="waktu_akhir" type="time" class="form-control{{ $errors->has('waktu_akhir') ? ' is-invalid' : '' }}" id="waktu_akhir" data-toggle="tooltip" data-placement="bottom" title="Waktu Berakhir">

              @if($errors->has('waktu_akhir'))
                <div class="invalid-feedback">
                  @foreach($errors->get('waktu_akhir') as $message)
                    {{$message}}
                  @endforeach
                </div>
              @endif
            </div>

            <div class="col-sm-3">
              <select name="tempat" class="form-control{{ $errors->has('tempat') ? ' is-invalid' : '' }}">
                <option value="null">-- Silahkan Pilih Tempat Praktik --</option>
                @foreach($tempat as $tempate)
                  <option value="{{$tempate->id}}">{{ $tempate->tempat }}</option>
                @endforeach
              </select>

              @if($errors->has('tempat'))
                <div class="invalid-feedback">
                  @foreach($errors->get('tempat') as $message)
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