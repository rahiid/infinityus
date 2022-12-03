<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INFINITYUS</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Scripts -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
    <!-- Favicon -->

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <!-- Styles -->

    <!-- Fonts Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- Fonts Awesome CDN -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Fonts -->
    @yield('assets')


</head>

<body>
    <div id="app">





        <header id="header" class="shadow-sm">

            <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                <div class="container">
                    <a  class="navbar-brand font-weight-normal" href="{{ url('/') }}" style="color: #fdca40;">
                        INFINITYUS
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto pl-lg-5 pl-0">







                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto d-flex" style="margin-left:  auto;">

                            <li>
                                <a href="#about" class="nav-item nav-link text-light">About</a>
                            </li>

                            <li>
                                <a href="#services" class="nav-item nav-link text-light">Services</a>
                            </li>

                            <li>
                                <a href="#pricing" class="nav-item nav-link text-light">Pricing</a>
                            </li>

                            <li>
                                <a href="#contactus" class="nav-item nav-link text-light">Contact Us</a>
                            </li>


                            <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="btn  btn-dark" href="{{ route('register') }}">{{ __('Get Started') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="/dashboard" class="dropdown-item text-light">User Panel</a>
                                            <a class="dropdown-item text-light" href="{{ route('logout') }}"
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
                    </div>
                </div>
            </nav>
        </header>



        <main class="py-4">
            @yield('content')
        </main>



        <footer class="footer-59391">
            <div class="border-bottom pb-5 mb-4">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-3">
                    <form action="#" class="subscribe mb-4 mb-lg-0" id="contactus">
                      <div class="form-group">
                      <input type="email" class="form-control" placeholder="Enter your email">
                      <button class="align-middle"><i class="fas fa-arrow-left fa-sm" ></i></button>
                      </div>
                    </form>
                  </div>
                  <div class="col-lg-6 text-lg-center">
                    <ul class="list-unstyled nav-links nav-left mb-4 mb-lg-0">

                    </ul>
                  </div>
                  <div class="col-lg-3">
                    <ul class="list-unstyled nav-links  nav-right text-lg-right">
                      <li><a href="#" class="align-middle"><i style="color:#fdca40;" class="fab fa-twitter fa-lg"></i></a></li>
                      <li><a href="#" class="align-middle"><i style="color:#fdca40;" class="fab fa-instagram fa-lg"></i></a></li>
                      <li><a href="#" class="align-middle"><i style="color:#fdca40;" class="fab fa-facebook-f fa-lg"></i></a></li>
                      <li><a href="#" class="align-middle"><i style="color:#fdca40;" class="fab fa-discord fa-lg"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-4 text-lg-center site-logo order-1 order-lg-2 mb-3 mb-lg-0">
                  <a href="#" class="m-0 p-0" style="color: #fdca40;">INFINITYUS</a>
                </div>
                <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">
                  <ul class="list-unstyled nav-links nav-links-left m-0 nav-left">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contactus">Contact</a></li>
                  </ul>
                </div>

                <div class="col-lg-4 text-lg-right order-3 order-lg-3">
                  <p class="m-0 text-muted"><small style="color: white;">&copy; 2021. All Rights Reserved.</small></p>
                </div>
              </div>
            </div>

        </footer>



    </div>
</body>
</html>

