<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto">{{ config('app.name')}}</a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('home') }}">Home</a></li>
          <li><a href="{{ route('manage.layanan') }}">Layanan</a></li>
          <!-- <li><a href="{{ url('status_pesanan') }}">Status Pesanan</a></li> -->
          <li><a href="{{ url('kreasi') }}">Kreasi</a></li>
          <li><a href="{{ url('notifikasi') }}">Notifikasi</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->