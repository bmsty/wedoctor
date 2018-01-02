<!-- Navigasi Atas -->
<nav class="navbar navbar-default nav-atas d-none d-sm-block" id="upPage">
  <div class="container-fluid container-navigasi">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/admin') }}">
        <img src="{{asset('img/navigasi/logo.png')}}" alt="Error load image">
      </a>
    </div>
    <div class="akun justify-content-end">
      <ul class="akun nav">
        <li class="nav-item">
          <a class="nav-link">
            <img src="{{asset('img/navigasi/akun.png')}}" alt="Error load image" width="80">
          </a>
          <ul>
            <!-- LOGOUT -->
            <li class="text-center"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{asset('/img/icon/logout.png')}}" alt="Error load image"> Log Out</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Navigasi Bawah -->
<nav class="navbar navbar-expand-md navbar-light bg-light nav-bawah d-none d-sm-block">
  <!-- Tombol responsive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navigasi -->
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin') ? ' active aktif' : ''}}" href="{{ url('/admin') }}">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/spesialisasi') || Request::is('admin/spesialisasi/edit') || Request::is('admin/spesialisasi/tambah') ? ' active aktif' : ''}}" href="{{ url('/admin/spesialisasi') }}">Spesialisasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/doctor') || Request::is('admin/doctor/edit') || Request::is('admin/doctor/tambah') ? ' active aktif' : ''}}" href="{{ url('/admin/doctor') }}">Dokter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/user') ? ' active aktif' : ''}}" href="{{ url('/admin/user') }}">Pengguna</a>
      </li>
    </ul>
  </div>
</nav>

<!-- ################################## Untuk Smartphone ############################################# -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-block d-sm-none nav-hp">
  <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{asset('img/navigasi/logohp.png')}}" alt="Error load image"></a>
  <!-- Tombol responsive -->
  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navigasi -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 border-atas">
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin') ? ' active aktif' : ''}}" href="{{ url('/admin') }}">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/spesialisasi') || Request::is('admin/spesialisasi/edit') || Request::is('admin/spesialisasi/tambah') ? ' active aktif' : ''}}" href="{{ url('/admin/spesialisasi') }}">Spesialisasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/doctor') || Request::is('admin/doctor/edit') || Request::is('admin/doctor/tambah') ? ' active aktif' : ''}}" href="{{ url('/admin/doctor') }}">Dokter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/user') ? ' active aktif' : ''}}" href="{{ url('/admin/user') }}">Pengguna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar<img class="float-right" src="{{asset('/img/icon/logout.png')}}" alt="Error load image"></a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    </ul>
  </div>
</nav>