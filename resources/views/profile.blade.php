@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleProfile.css')}}">
@endsection

@section('content')
<!-- About -->
<section class="container-fluid about">
  <div class="row about-row">
    <div class="col-sm-12 about-colom">
      <h1>Profil</h1>

      <div class="card text-center">
        <div class="card-header spesialisasi-background-title">
          <b>Data Diri User</b>
          <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px;"><img src="{{asset('/img/icon/edit.png')}}" alt="Error load image"></button>
        </div>

        <form class="form-edit" action="{{ url('/profile/'.Auth::user()->id) }}" method="POST">
        {{ csrf_field() }}

          <div class="card-body text-left spesialisasi-background">

            <!-- Username -->
            <div class="form-group row" style="margin-top: 15px;">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input name="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{Auth::user()->username}}">

                @if($errors->has('username'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('username') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- Nama -->
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input name="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" value="{{Auth::user()->nama}}">

                @if($errors->has('nama'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('nama') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- NIK -->
            <div class="form-group row">
              <label for="nik" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input name="nik" type="number" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" value="{{Auth::user()->nik}}">

                @if($errors->has('nik'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('nik') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- Email -->
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{Auth::user()->email}}">

                @if($errors->has('email'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('email') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- Alamat -->
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" id="alamat">{{Auth::user()->alamat}}</textarea>

                @if($errors->has('alamat'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('alamat') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>
          </div>

          <div class="card-footer spesialisasi-background-title">

            <button type="submit" class="btn btn-outline-info btn-md"><b>EDIT</b></button>

          </div>
          <input type="hidden" name="_method" value="PUT">
        </form>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header spesialisasi-background-title" style="padding:10px;">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form class="edit-password" action="{{ url('/profile/password') }}" method="POST">
              {{ csrf_field() }}
                <div class="modal-body text-left spesialisasi-background" style="padding-top: 25px;">
                  <!-- Password Edit -->
                  <div class="card-body" style="padding:0;">
                    <div class="form-group row">
                      <label for="current-password" class="col-sm-4 col-form-label">Password Lama</label>
                      <div class="col-sm-8">
                        <input name="current-password" type="password" class="form-control{{ $errors->editPwd->has('current-password') ? ' is-invalid' : '' }}" placeholder="Masukkan pasword lama anda">
                        @if ($errors->editPwd->has('current-password'))
                          <small class="form-text" style="color:red;">{{ $errors->editPwd->first('current-password') }}</small>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-sm-4 col-form-label">Password Baru</label>
                      <div class="col-sm-8">
                        <input name="password" type="password" class="form-control{{ $errors->editPwd->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan pasword baru anda">
                        @if ($errors->editPwd->has('password'))
                          <div class="invalid-feedback">
                            {{ $errors->editPwd->first('password') }}
                          </div>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password_confirmation" class="col-sm-4 col-form-label">Konfirmasi Password Baru</label>
                      <div class="col-sm-8">
                        <input name="password_confirmation" type="password" class="form-control{{ $errors->editPwd->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan konfirmasi pasword lama anda">
                      </div>
                    </div>
                  </div>
                </div>
              <div class="modal-footer spesialisasi-background-title" style="padding:5px;">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-outline-dark">Ubah Password</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
  @if (count($errors->editPwd->all()) > 0)
  <script>
    $(document).ready(function () {
      $('#exampleModal').modal('show');
    });
  </script>
  @endif

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

<script>
  $('.edit-password').submit(function (e)
  {
    var form = this;
    e.preventDefault();
    swal
    ({
      title: 'Apa anda yakin?',
      text: "Apakah anda yakin ingin mengubah password anda?",
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