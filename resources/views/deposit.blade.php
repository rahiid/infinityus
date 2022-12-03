<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INFINITYUS | Deposit</title>

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
    <link rel="stylesheet" href="{{asset('/css/deposit.css')}}">
    <!-- Styles -->

    <!-- Fonts Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- Fonts Awesome CDN -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Fonts -->


    <script>

        $(document).ready(function(){
            $("#ammount").on("input", function(){
                // Print entered value in a div box
                var num = $(this).val();
                var minus = (5/100) * parseInt(num);
                var result = num - minus;

                if(isNaN(parseInt(num))) {
                var result = 0;
                $("#change_ammount").text(result);
                }

                else{
                    $("#change_ammount").text(result);
                }



            });

            $('#setwallettype').on('change', function(){
            var value= `<input value="${$(this).val()}" id="selVal" />`;
            $(value).insertAfter('#setwallettype');
            $("#selVal").select();
            document.execCommand("Copy");
            $('body').find("#selVal").remove();
            });
        });


    </script>
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



                                <div class="sidebar-items" id="u1">
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
                        <span class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                             <img src="/image/menu.svg" style="width:40px; height:35px;" class="img-responsive menu"  alt="menu"></span>
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


    <section class="diposit-section">
        <div class="container">
            <div class="row">

                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="deposit-info">
                            <h2>Request for Deposit</h2>
                            <div class="card">
                                <ul>
                                    <li>Minimum amount: <span class="">$10</span></li>
                                    <li>Maximum amount: <span>$1000</span></li>
                                    <li>Charges (Fixed): <span>$0</span></li>
                                    <li>Charges (%): <span>5%</span></li>
                                    <li>Duration: <span>48</span></li>
                                </ul>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-plus fa-xs"></i> &nbsp; Request Deposit</button>
                            </div>



                        </div>

                    </div>
                    <div class="col-md-4">
                    </div>





            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="collapse diposit-section-inner" id="collapseExample" style="text-align: center">
                        <form method="POST" class="addmoney-control" name="addmoney-form" action="deposit"  onsubmit="depositmoneytoacc.disabled = true; return true;">

                            @csrf

                            @if(Auth::check())
                                 <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                                 <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                            @else
                            <input type="hidden" name="userid" value="User Not Logged In!!">
                            @endif






                        <div class="addmoney-items">
                            <div class="addmoney-selection input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="setwallettype" style="color:#0A2463;">Wallet Address:</label>
                                </div>

                                <select class="custom-select" id="setwallettype">
                                  <option selected> Choose Wallet type first</option>
                                  <option value="BTC:  bc1qmqjuma6ttmfnp48y37wyeaz9vhfdkzr4cp7vfv"  id="btc"  name="payment_type">BTC   : bc1qmqjuma6ttmfnp48y37wyeaz9vhfdkzr4cp7vfv</option>
                                  <option value="LTC:  ltc1qm74al0awp3ye3w28exr3tglfjmywjcjxaeedtu"  id="ltc"  name="payment_type">LTC   : ltc1qm74al0awp3ye3w28exr3tglfjmywjcjxaeedtu</option>
                                  <option value="XLM:  GCM2WCF7TFAHCLRZM6ZAPE6JKT37KU7WCLDLYPA6ARBDEQHQRKL4OT2C"  id="xlm"  name="payment_type">XLM   : GCM2WCF7TFAHCLRZM6ZAPE6JKT37KU7WCLDLYPA6ARBDEQHQRKL4OT2C</option>
                                  <option value="USDT: TJtx1RTq6ugpj5vB3Wzjwg2sHYgkk4naF7" id="usdt" name="payment_type">USDT : TJtx1RTq6ugpj5vB3Wzjwg2sHYgkk4naF7</option>
                                </select>
                              </div>


                            <div class="form-group">
                                <label for="walletid">OWN Wallet Address</label> <br>
                                <input class="addmoney-control addmoney-input" type="text" id="walletid" name="walletid" style="width: 60%;" required>
                            </div>

                            <div class="form-group" >
                                <label class="my-1 mr-2 addmoney-input" for="inlineFormCustomSelectPref" >Ammount</label> <br>
                                <input class="addmoney-control" type="number" step="0.00001" id="ammount" name="ammount" min="10" style="width: 60%;" required>
                                <br><small  class="form-text text-muted">10% charge will be applied to this Transaction.</small>
                            </div>

                            <h6>Ammount you will recieve: <span id="change_ammount"></span> USD</h6>

                            <button type="submit" name="depositmoneytoacc" class="btn btn-primary">Deposit</button>
                        </div>


                    </form>
                      </div>
                </div>
            </div>



</section>


</body>
</html>

