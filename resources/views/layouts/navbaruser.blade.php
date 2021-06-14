
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto">{{ config('app.name')}}</a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/layanan">Layanan</a></li>
          <li><a href="/status_pesanan">Status Pesanan</a></li>
          <li><a href="/kreasi">Daur Ulang</a></li>
          <li><a href="/notifikasi">Notifikasi</a></li>
          <li><a href="/profil">{{ Auth::user()->name }}</a></li>
          <li><a href="{{ route('logout')}}">Logout</a></li>

          
        </ul>
      </nav>

    </div>
  </header>