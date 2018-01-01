<!-- ################################## Non Smartphone ############################################# -->
<!-- Navigasi Atas -->
<nav class="navbar navbar-default nav-atas d-none d-sm-block" id="upPage">
  <div class="container-fluid container-navigasi">
    <div class="navbar-header">
      @guest
      <a class="navbar-brand" href="{{ url('/') }}">
      @else
      <a class="navbar-brand" href="{{ url('/home') }}">
      @endguest
        <img src="{{asset('img/navigasi/logo.png')}}" alt="Error load image">
      </a>
    </div>
    <div class="akun justify-content-end">
      <ul class="akun nav">
        <li class="nav-item">
          <a class="nav-link">
            <img src="{{asset('img/navigasi/akun.png')}}" alt="Error load image" width="80">
          </a>

          @guest <!-- Untuk Tamu -->
          <ul>
            <li class="text-center"><a href="{{ url('/signin') }}"><img src="{{asset('/img/icon/signin.png')}}" alt="Error load image"> Masuk</a></li>
            <li class="text-center"><a href="{{ url('/signup') }}"><img src="{{asset('/img/icon/signup.png')}}" alt="Error load image"> Daftar</a></li>
          </ul>
          @else <!-- Untuk user yang udah login -->
          <ul>
            <li class="text-center"><a href="{{ url('/profile/'.Auth::user()->id) }}"><img src="{{asset('/img/icon/profile.png')}}" alt="Error load image"> Profil</a></li>

            <!-- LOGOUT -->
            <li class="text-center"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{asset('/img/icon/logout.png')}}" alt="Error load image"> Keluar</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

          </ul>
          @endguest

        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Navigasi Bawah -->
<nav class="navbar navbar-expand-md navbar-light bg-light nav-bawah  d-none d-sm-block">
  <!-- Tombol responsive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navigasi -->
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="nav justify-content-center">
      @guest
        <li class="nav-item">
          <a class="nav-link{{ Request::is('/') ? ' active aktif' : ''}}" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('spesialisasi') || Request::is('spesialisasi/doctor') || Request::is('spesialisasi/doctor/doctorschedule') ? ' active aktif' : ''}}" href="{{ url('/spesialisasi') }}">Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('howtobooking') ? ' active aktif' : ''}}" href="{{ url('/howtobooking') }}">Cara Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('findjadwal') ? ' active aktif' : ''}}" href="{{ url('/findjadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('about') ? ' active aktif' : ''}}" href="{{ url('/about') }}">Tentang</a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link{{ Request::is('home') ? ' active aktif' : ''}}" href="{{ url('/home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('spesialisasi') ? ' active aktif' : ''}}" href="{{ url('/spesialisasi') }}">Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('howtobooking') ? ' active aktif' : ''}}" href="{{ url('/howtobooking') }}">Cara Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('about') ? ' active aktif' : ''}}" href="{{ url('/about') }}">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('findjadwal') ? ' active aktif' : ''}}" href="{{ url('/findjadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('findrating') ? ' active aktif' : ''}}" href="{{ url('/findrating') }}">Rating</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('riwayat') ? ' active aktif' : ''}}" href="{{ url('/riwayat') }}">Riwayat</a>
        </li>
      @endguest
    </ul>
  </div>
</nav>

<!-- ################################## Untuk Smartphone ############################################# -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-block d-sm-none nav-hp">
  @guest
  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/navigasi/logohp.png')}}" alt="Error load image"></a>
  @else
  <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{asset('img/navigasi/logohp.png')}}" alt="Error load image"></a>
  @endguest
  <!-- Tombol responsive -->
  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navigasi -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 border-atas">
      @guest
        <li class="nav-item{{ Request::is('/') ? ' active aktif' : ''}}">
          <a class="nav-link" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('spesialisasi') || Request::is('spesialisasi/doctor') || Request::is('spesialisasi/doctor/doctorschedule') ? ' active aktif' : ''}}" href="{{ url('/spesialisasi') }}">Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('howtobooking') ? ' active aktif' : ''}}" href="{{ url('/howtobooking') }}">Cara Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('findjadwal') ? ' active aktif' : ''}}" href="{{ url('/findjadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('about') ? ' active aktif' : ''}}" href="{{ url('/about') }}">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('login') ? ' active aktif' : ''}}" href="{{ url('/signin') }}">Masuk<img class="float-right" src="{{asset('/img/icon/signin.png')}}" alt="Error load image"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('register') ? ' active aktif' : ''}}" href="{{ url('/signup') }}">Daftar<img class="float-right" src="{{asset('/img/icon/signup.png')}}" alt="Error load image"></a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link{{ Request::is('home') ? ' active aktif' : ''}}" href="{{ url('/home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('spesialisasi') ? ' active aktif' : ''}}" href="{{ url('/spesialisasi') }}">Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('howtobooking') ? ' active aktif' : ''}}" href="{{ url('/howtobooking') }}">Cara Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('about') ? ' active aktif' : ''}}" href="{{ url('/about') }}">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('findjadwal') ? ' active aktif' : ''}}" href="{{ url('/findjadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('findrating') ? ' active aktif' : ''}}" href="{{ url('/findrating') }}">Rating</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('riwayat') ? ' active aktif' : ''}}" href="{{ url('/riwayat') }}">Riwayat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ Request::is('profile/{id}') ? ' active aktif' : ''}}" href="{{ url('/profile/'.Auth::user()->id) }}">Profil<img class="float-right" src="{{asset('/img/icon/profile.png')}}" alt="Error load image"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar<img class="float-right" src="{{asset('/img/icon/logout.png')}}" alt="Error load image"></a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @endguest
    </ul>
  </div>
</nav>