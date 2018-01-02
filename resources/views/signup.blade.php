@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSignup.css')}}">
@endsection

@section('content')
<!-- Sign Up -->
<section class="container-fluid signup">
  <div class="row signup-row justify-content-md-center align-items-center">
    <div class="signup-colom">
      <h1 class="text-center">Daftar</h1>
      <hr class="d-none d-sm-block">

      <form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}

        <div class="bungkus-form">

          <!-- Username -->
          <div class="form-group form-margin-atas"">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" aria-describedby="userHelp" placeholder="Nama User Anda" value="{{ old('username') }}" autofocus>
            <small id="userHelp" class="form-text text-muted" style="display:{{ $errors->has('username') ? 'none' : '' }}">Username wajib di isi untuk keperluan Log In anda</small>

            @if ($errors->has('username'))
              <div class="invalid-feedback">
                {{ $errors->first('username') }}
              </div>
            @endif
          </div>

          <!-- Password -->
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="username" placeholder="Password Anda">

            @if ($errors->has('password'))
              <div class="invalid-feedback">
                {{ $errors->first('password') }}
              </div>
            @endif
          </div>

          <!-- Password Confirmation -->
          <div class="form-group">
            <label for="password-confirm">Konfirmasi Password</label>
            <input name="password_confirmation" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" placeholder="Password Anda">
          </div>

          <!-- Nama -->
          <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" id="nama" placeholder="Nama Lengkap Anda" value="{{ old('nama') }}">

            @if ($errors->has('nama'))
              <div class="invalid-feedback">
                {{ $errors->first('nama') }}
              </div>
            @endif
          </div>

          <!-- Jenis Kelamin -->
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="jenisKelamin">Jenis Kelamin</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio" aria-label="Radio button for following text input" name="jenisKelamin" value="Laki-laki" checked>
                </span>
                <input type="text" class="form-control" aria-label="Text input with radio button" value="Laki-laki" readonly>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <div class="input-group j-k-margin">
                <span class="input-group-addon">
                  <input type="radio" aria-label="Radio button for following text input" name="jenisKelamin" value="Perempuan">
                </span>
                <input type="text" class="form-control" aria-label="Text input with radio button" value="Perempuan" readonly>
              </div>
            </div>
          </div>

          <!-- NIK -->
          <div class="form-group">
            <label for="nik">Nomor Induk Kependudukan</label>
            <input name="nik" type="number" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" id="nik" aria-describedby="nikHelp" placeholder="NIK yang ada di KTP anda" value="{{ old('nik') }}">
            <small id="nikHelp" class="form-text text-muted" style="display:{{ $errors->has('nik') ? 'none' : '' }}">Pastikan nomor yang anda cantumkan sudah sesuai dengan KTP anda</small>

            @if ($errors->has('nik'))
              <div class="invalid-feedback">
                {{ $errors->first('nik') }}
              </div>
            @endif
          </div>

          <!-- Email -->
          <div class="form-group">
            <label for="email">Alamat Email</label>
            <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Email Anda" value="{{ old('email') }}">
            <small id="emailHelp" class="form-text text-muted" style="display:{{ $errors->has('email') ? 'none' : '' }}">Email yang dicantumkan adalah email aktif anda</small>

            @if ($errors->has('email'))
              <div class="invalid-feedback">
                {{ $errors->first('email') }}
              </div>
            @endif
          </div>

          <!-- Alamat -->
          <div class="form-group">
            <label for="alamat">Alamat KTP</label>
            <input name="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" id="alamat" placeholder="Alamat sesuai KTP" value="{{ old('alamat') }}">

            @if ($errors->has('alamat'))
              <div class="invalid-feedback">
                {{ $errors->first('alamat') }}
              </div>
            @endif
          </div>
        
        <!-- Button -->
        <div class="form-group button-margin text-right">
          <button type="reset" class="btn btn-light">Hapus</button>
          <button type="submit" class="btn btn-light">Daftar</button>
        </div>
      </form>

    </div>
  </div>
</section>
@endsection