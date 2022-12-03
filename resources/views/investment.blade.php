<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INFINITYUS | Investment</title>

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
    <link rel="stylesheet" href="{{asset('/css/invest.css')}}">
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



                                <div class="sidebar-items" id="u1">
                                    <i class="fas fa-hand-holding-usd fa-lg"></i>&nbsp;
                                    <a data-bs-toggle="collapse" href="#minvestment" role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed sidebar-links"><h5>Investment</h5>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>

                                </div>
                                <div id="minvestment" class="collapse" data-parent="#minvestment">
                                    <ul>
                                        <a class="dropdown-item" href="/investment">Business plan</a>
                                        <a class="dropdown-item" href="/investmenthistory">View Statement</a>
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

                                <div class="sidebar-items">
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


    <section class="invest-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="invest-section-inner">
                        <div class="invest" style="text-align: center;" >
                            <h2>Your Total Invested Ammount: <span style="color: #0A2463">{{{ isset(Auth::user()->name) ? Auth::user()->invest : Auth::user()->email }}} USD</span></span></h4>
                        </div>
                    </div>
                    </div>

                </div>
        </div>
      </div>

</section>





  <!--========================== Pricing Section ============================-->

    <section id="pricing" class="wow fadeInUp section-bg">

        <div class="container">

          <header class="section-header">
            <h4>OUR INVESTMENT PLANS</h4>
            <img src="image/dividerdark.svg" alt="divider" width="300px" height="8px">
            <p>Choose how you want to invest with us</p>
          </header>

          <div class="row flex-items-xs-middle flex-items-xs-center">



                          <!-- Basic Plan  -->
                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Beginar Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>10</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $10</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $0.30$</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$35 Maximum return</li>
                          </ul>
                    </div>
                    <div class="pricing-button">
                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="beginar">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>
                    </div>
                  </div>
                </div>
                         <!-- Basic Plan  -->
                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Pro Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>25</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $25</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $0.75</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$100 Maximum return</li>
                        </ul>
                    </div>
                    <div class="pricing-button">

                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="pro">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>


                    </div>
                  </div>
                </div>

                         <!-- Basic Plan  -->
                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Sweep Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>50</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $50</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $1.625</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$220 Maximum return</li>
                        </ul>
                    </div>
                    <div class="pricing-button">
                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="sweep">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>
                    </div>
                  </div>
                </div>

                         <!-- Basic Plan  -->
                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Ethnic Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>100</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $100</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $3.25</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$480 Maximum return</li>
                        </ul>
                    </div>
                    <div class="pricing-button">
                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="ethnic">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>
                    </div>
                  </div>
                </div>



                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Silver Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>200</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $200</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $7</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$990 Maximum return</li>
                        </ul>
                    </div>
                    <div class="pricing-button">
                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="silver">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>
                    </div>
                  </div>
                </div>
                         <!-- Basic Plan  -->
                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Golden Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>350</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $350</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $12.25</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$1575 Maximum return</li>
                        </ul>
                    </div>
                    <div class="pricing-button">
                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="golden">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>
                    </div>
                  </div>
                </div>

                         <!-- Basic Plan  -->
                <div class="col-lg-3 col-md-6">
                  <div class="pricing-box">
                      <h3>Diamond Trader</h3>
                      <div class="cur">
                        <span>$</span>
                        <h2>500</h2>
                        <h6>USD</h6>
                       </div>
                    <div class="price-list">
                        <ul class="list-unstyled">
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $500</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $17.50</li>
                            <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$2500 Maximum return</li>
                        </ul>
                    </div>
                    <div class="pricing-button">
                        <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                            @csrf
                            @if(Auth::check())
                                <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="ammount" value="diamond">
                            </div>
                            <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                          </form>
                    </div>
                  </div>
                </div>

                         <!-- Basic Plan  -->
                         <div class="col-lg-3 col-md-6">
                          <div class="pricing-box">
                              <h3>Platinum Trader</h3>
                              <div class="cur">
                                <span>$</span>
                                <h2>1000</h2>
                                <h6>USD</h6>
                               </div>
                            <div class="price-list">
                                <ul class="list-unstyled">
                                    <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Max. Possible deposit: $1000</li>
                                    <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>Daily Income: $40</li>
                                    <li class="list-item"><span class="iconify" data-icon="bx:bx-check" style="color: #0a2463;" data-width="25" data-height="20"></span>$5000 Maximum return</li>
                                </ul>
                            </div>
                            <div class="pricing-button">
                                <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                                    @csrf
                                    @if(Auth::check())
                                        <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                                    @else
                                    <input type="hidden" name="userid" value="User Not Logged In!!">
                                    @endif
                                    <div class="form-group">
                                      <input type="hidden" class="form-control" name="ammount" value="platinum">
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="investmoney">Buy Now</button>
                                  </form>
                            </div>
                          </div>
                        </div>

                   </div>
        </div>

  </section>


</body>
</html>

