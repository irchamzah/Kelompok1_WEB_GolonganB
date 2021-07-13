<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto">{{ config('app.name')}}</a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
          
            <!-- <li><a href="{{ url('status_pesanan') }}">Status Pesanan</a></li> -->
          
          
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li><a class="nav-link" href="{{ url('layanan') }}">Layanan</a></li>
                        <li><a class="nav-link" href="{{ url('kreasi') }}">Kreasi</a></li>
                        <li><a class="nav-link" href="{{ url('notifikasi') }}">Notifikasi</a></li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ url('profil') }}">
                                        Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->