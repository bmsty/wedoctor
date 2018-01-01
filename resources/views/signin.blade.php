@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSignin.css')}}">
@endsection

@section('content')
<!-- Sign In -->
<section class="container-fluid signin">
  <div class="row signin-row justify-content-md-center align-items-center">
    <div class="signin-colom">
      <h1 class="text-center">Masuk</h1>
      <hr class="d-none d-sm-block">

      <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group form-margin-atas">
          <label for="username">Username</label>
          <input name="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" placeholder="Nama User Anda" autofocus="">

          @if ($errors->has('username'))
            <div class="invalid-feedback">
              {{ $errors->first('username') }}
            </div>
          @endif
        </div>
        <div class="form-group form-margin-bawah">
          <label for="password">Password</label>
          <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="username" placeholder="Password Anda">

          @if ($errors->has('password'))
            <div class="invalid-feedback">
              {{ $errors->first('password') }}
            </div>
          @endif
        </div>
        <div class="form-group button-margin text-right">
          <button type="reset" class="btn btn-light">Hapus</button>
          <button type="submit" class="btn btn-light">Masuk</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection