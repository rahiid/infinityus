<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INFINITYUS | Referrer History</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" defer></script>
    <!-- Scripts -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
    <!-- Favicon -->

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{{asset('/css/user.css')}}">
    <link rel="stylesheet" href="{{asset('/css/referrer.css')}}">
    <!-- Styles -->

    <!-- Fonts Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- Fonts Awesome CDN -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Fonts -->


</head>

<body>

    <section class="Sidebar-section">
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">

                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <div class="profile-userpic">
                            <img src="/image/avatar.svg" class="img-responsive" alt="Userpic">



                            @if(Auth::check())
                             <h5>username : {{{ isset(Auth::user()->name) ? Auth::user()->username : Auth::user()->email }}}</h5>
                            <h6>#{{{ isset(Auth::user()->name) ? Auth::user()->username : Auth::user()->email }}}</h6>
                            <p style="color: #0A2463; font-weight:700;">Balance: <span>{{{ isset(Auth::user()->name) ? Auth::user()->wallet : Auth::user()->email }}}$</span></p>
                            @else
                            <h5> Name </h5>
                            <h5> Id </h5>
                            <p style="">Balance: <span> 00$</span></p>
                            @endif
                        </div>

                            <div class="sidebar-bottom">

                                <div class="sidebar-items" >
                                    <i class="fas fa-home fa-lg"></i>&nbsp;
                                    <a  href="/dashboard" class="sidebar-links"><h5>Dashboard</h5></a>
                                </div>


                                <div class="sidebar-items">
                                    <i class="fas fa-coins fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed sidebar-links" href="#mcoin"><h5>Coin</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>

                                </div>
                                <div id="mcoin" class="collapse" data-parent="#mcoin">
                                    <ul>
                                       <a class="dropdown-item" href="/exchange">Exchange Coin</a>
                                    </ul>
                                </div>



                                <div class="sidebar-items">
                                    <i class="fas fa-donate fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"  class="collapsed sidebar-links" href="#mdeposit"><h5>Deposit</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
                                </div>
                                <div id="mdeposit" class="collapse" data-parent="#mdeposit">
                                    <ul>
                                        <a class="dropdown-item" href="/deposit">New deposit</a>
                                        <a class="dropdown-item" href="/deposithistory">View Statement</a>
                                    </ul>
                                </div>



                                <div class="sidebar-items">
                                    <i class="fas fa-hand-holding-usd fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" href="#minvestment" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed sidebar-links"><h5>Investment</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>

                                </div>
                                <div id="minvestment" class="collapse" data-parent="#minvestment">
                                    <ul>
                                        <a class="dropdown-item" href="/investment">Business plan</a>
                                        <a class="dropdown-item" href="/investmenthistory">View Investment</a>
                                    </ul>
                                </div>

                                <div class="sidebar-items">
                                    <i class="fas fa-exchange-alt fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" href="#mbalancetransfer" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed sidebar-links"><h5>Balance Transfer</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>

                                </div>
                                <div id="mbalancetransfer" class="collapse" data-parent="#mbalancetransfer">
                                    <ul>
                                        <a class="dropdown-item" href="/balancetransfer">Send Money</a>
                                        <a class="dropdown-item" href="/transferhistory">View Statement</a>
                                    </ul>
                                </div>

                                <div class="sidebar-items" id="u1">
                                    <i class="fas fa-user-plus fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed sidebar-links" href="#mreferrer"><h5>Referrer</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>

                                </div>
                                <div id="mreferrer" class="collapse" data-parent="#mreferrer">
                                    <ul>
                                        <a class="dropdown-item" href="/referrer">Referrer a friend</a>
                                        <a class="dropdown-item" href="/referrerhistory">View Statement</a>
                                    </ul>
                                </div>



                                <div class="sidebar-items">
                                    <i class="fas fa-money-bill-wave fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"  class="collapsed sidebar-links" href="#mwithdraw"><h5>Withdraw</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
                                </div>
                                <div id="mwithdraw" class="collapse" data-parent="#mwithdraw">
                                    <ul>
                                        <a class="dropdown-item" href="/withdraw">Request a withdrawal</a>
                                        <a class="dropdown-item" href="/withdrawhistory">View Statement</a>
                                    </ul>
                                </div>



                                <div class="sidebar-items">
                                    <i class="fas fa-hands-helping fa-lg"></i>&nbsp;
                                    <a href="/support" class="sidebar-links"><h5>Support</h5></a>
                                </div>

                                <div class="sidebar-items">
                                    <i class="fas fa-sign-out-alt fa-lg"></i>&nbsp;
                                    <a class="sidebar-links" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <h5>LogOut</h5>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </div>




                    </div>
            </div>

    </section>


    <header class="header-section">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav navbar">
                        <span class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"> <img src="/image/menu.svg" style="width:40px; height:35px;" class="img-responsive menu"  alt="menu"></span>
                        <div class="navbar-right-content">
                            <div class="d-flex dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/image/avatar.svg" class="img-responsive" alt="Userpic">
                                @if(Auth::check())
                               <span class="username">{{{ isset(Auth::user()->name) ? Auth::user()->username : Auth::user()->email }}}</span>
                                @else
                                <span>Name</span>
                                @endif
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/">Home</a></li>
                                    <li><a class="dropdown-item" href="/profile">Edit Profile</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        LogOut
                                    </a></li>
                                  </ul>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </form>
                        </div>
                    </nav>


                </div>
            </div>
        </div>

    </header>


    <section class="referrer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Referrer Statement</h2>
                    <div class="reffer-history" id="scrollbar">
                        <table class="table table-responsive-md table-bordered">
                                @if(Auth::check())
                                @if (count($referrers))

                                <thead >

                                    <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Generation</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($referrers as $referrers)
                                        <tr>

                                            <td>{{$referrers['username']}}</td>
                                            <td>{{$referrers['hashl']}}</td>

                                        </tr>

                                    @endforeach


                                @endif


                                @else

                                <h1 style="color: #0A2463;">No Data to Show!!!</h1>

                            </tbody>
                                @endif

                        </table>
                    </div>

                </div>
            </div>
        </div>


</section>



</body>
</html>

