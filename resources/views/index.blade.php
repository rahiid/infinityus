@extends('layouts.app')



@section('assets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link href="https://INFINITYUS.com/temp/lib/jquery/magnific-popup.css" rel="stylesheet">

@endsection


@section('content')

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true"  class="d-flex justify-content-center align-items-center w-100" >

    <!-- Then put toasts within -->
    <div  class="toast" data-autohide="false" style="text-align: center; margin-top:50vh; position: absolute;top: 0; right: 1; z-index:1;">
      <div class="toast-header" >

        <strong class="me-auto" style=" color: #0A2463">INFINITYUS Alert: </strong>
        <small></small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body" style="background: #e1e4e9">
        INFINITYUS App with be available from end of this month. Stay tuned.
      </div>
    </div>
  </div>


<section class="banner-section"  id="autoHeight_wrapper">


                    <div class="autoHeight" id="autoHeight">
                        <div class="banner-inner" style="background:  url('{{ asset('image/bg/b1.jpg')}}');">
                            <h1>Trade in the Moment</h1>
                            <h4>The most secure cryptocurrency trading platform.</h4>


                            @if(Auth::check())
                            <a href="/dashboard" class="btn   btn-one">GO TO DASHBOARD</a>
                            @else
                            <a href="/register" class="btn   btn-one">JOIN NOW</a>
                            @endif

                        </div>
                        <div class="banner-inner" style="background: url('{{ asset('image/bg/b2.jpg')}}')">
                            <h1>We process withdrawal request Promptly</h1>
                            <h4>Put your investing ideas into action with a full range of investments.Enjoy real benefits and rewards on INFINITYUS.</h4>


                            @if(Auth::check())
                            <a href="/dashboard" class="btn   btn-one">GO TO DASHBOARD</a>
                            @else
                            <a href="/register" class="btn   btn-one">JOIN NOW</a>
                            @endif

                        </div>
                        <div class="banner-inner" style="background:  url('{{ asset('image/bg/b3.jpg')}}');">
                            <h1>Invest in the future</h1>
                            <h4>TIME TO MAKE MONEY WITH INFINITYUS</h4>


                            @if(Auth::check())
                            <a href="/dashboard" class="btn   btn-one">GO TO DASHBOARD</a>
                            @else
                            <a href="/register" class="btn   btn-one">JOIN NOW</a>
                            @endif

                        </div>
                        <div class="banner-inner" style="background:  url('{{ asset('image/bg/b4.jpg')}}');">
                            <h1>Buy,sell,trade,invest has been simplified</h1>
                            <h4>Safe solutions to improve your capital. Advantageous offers in the world of blockchain technologies and investments</h4>


                            @if(Auth::check())
                            <a href="/dashboard" class="btn   btn-one">GO TO DASHBOARD</a>
                            @else
                            <a href="/register" class="btn   btn-one">JOIN NOW</a>
                            @endif

                        </div>



                      </div>


</section>




<section id="about">
    <div class="container">

      <div class="section-header">
        <h2>About INFINITYUS</h2>
        <img src="image/divider.svg" alt="divider" width="300px" height="8px">
        <p>INFINITYUS is an industrial trading and digital asset management platform.</p>
      </div>

      <div class="text-center row about-cols">

        <div class="col-lg-3 col-md-4 wow fadeInUp">
          <div class="about-col">
            <div class="img">
              <img src="image/about/innovate.png" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">We Innovate</a></h2>
            <p>We believe in the blockchain potential to provide innovative solutions across industries and beyond crypto.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="image/about/secure.png" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">LINCENSE CERTIFIED</a></h2>
            <p>Our company conducts absolutely legal activities in the legal field. We are legal and safe.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about-col">
            <div class="img">
              <img src="image/about/prof.png" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">WE ARE PROFESSIONAL</a></h2>
            <p>Catch Every Tiny Profits With The Automated Trading Bot developed by AnuyCoinTrade professional team.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about-col">
            <div class="img">
              <img src="image/about/invest.png" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">SAVINGS AND INVESTMENT</a></h2>
            <p>Withdraw your earned dividends at any time convenient for you! Enjoy the resulting profit on your own!</p>
          </div>
        </div>

      </div>

    </div>
  </section>



    <section id="services">
        <div class="container">

          <div class="section-header">
            <h2>OUR SERVICES</h2>
            <img src="image/dividerdark.svg" alt="divider" width="300px" height="8px">
            <p>Why you should Choose us</p>
          </div>

          <div class="row">

            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="icon" >
                    <img class="svg" src="image/services/profit.svg" alt="">
                </div>
                <h3 class="title">STABLE AND PROFITABLE</h3>
                <p class="description">We ensures the safety and stability of your funds, thanks to close-knit business relationships with our partners and legal advisers.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="icon">
                    <img class="svg" src="image/services/credit-card.svg" alt="">
                </div>
                <h3 class="title">INSTANT AND SECURE WITHDRAWALS</h3>
                <p class="description">Our withdrawals are all processed instantly after they are requested to any payment processor which you prefer.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="icon">
                    <img class="svg" src="image/services/referral.svg" alt="">
                </div>
                <h3 class="title">REFERRALS PROGRAM</h3>
                <p class="description">We have developed another collaboration opportunity for you to make money Our referral program is a globally recognized.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="icon">
                    <img class="svg" src="image/services/exchange.svg" alt="">
                </div>
                <h3 class="title">MULTI CURRENCY SUPPORT</h3>
                <p class="description">We accept Perfect Money, Bitcoin, Ethereum, Litecoin, Dogecoin, Ripple, Tron, Bkash, and Nagad</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 ">
              <div class="box">
                <div class="icon">
                    <img class="svg" src="image/services/customer-service.svg" alt="">
                </div>
                <h3 class="title">24/7 CUSTOMER SUPPORT</h3>
                <p class="description">If you have any questions, do not hesitate to contact our support which is available 24/7. Our agents will guide you step by step.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="icon">
                    <img class="svg" src="image/services/cyber-security.svg" alt="">
                </div>
                <h3 class="title">ULTIMATE SECURITY</h3>
                <p class="description">We have the most powerful and reliable protection against DDoS attacks and hacking.</p>
              </div>
            </div>

        </div>

        </div>
      </section>

  <!--==========================
      Pricing Section
    ============================-->
<section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h2>OUR INVESTMENT PLAN</h2>
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                    @if(Auth::check())
                    <a href="/investment" class="btn btn-primary">Buy Now</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                    @endif
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
                            @if(Auth::check())
                            <a href="/investment" class="btn btn-primary">Buy Now</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Buy Now</a>
                            @endif
                          </div>
                        </div>
                      </div>

                 </div>
      </div>

</section>



<section id="faq">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
          <img src="image/dividerdark.svg" alt="divider" width="300px" height="8px">
          <p>QUESTIONS &amp; ANSWERS</p>
          <span class="section-divider"></span>
        </div>

        <ul id="faq-list" class="wow fadeInUp">
                       <li>
             <a data-toggle="collapse" class="collapsed" href="#faq6">Does the platform have a referral program? <i class="fas fa-caret-down"></i></a>
             <div id="faq6" class="collapse" data-parent="#faq6">
              <p>
                Referral Program up to 7 level.
              </p>
            </div>
          </li>
                       <li>
             <a data-toggle="collapse" class="collapsed" href="#faq5">What should I do if I forgot my password/login? <i class="fas fa-caret-down"></i></a>
             <div id="faq5" class="collapse" data-parent="#faq5">
              <p>
                First of all, make sure that all the characters were entered correctly. If still not working then click on &quot;Forgot password&quot; from the login page and follow the instruction which is sent to your registered mail address.
              </p>
            </div>
          </li>
                       <li>
             <a data-toggle="collapse" class="collapsed" href="#faq4">How quickly are withdrawals processed? <i class="fas fa-caret-down"></i></a>
             <div id="faq4" class="collapse" data-parent="#faq4">
              <p>
                Instant withdrawal.
              </p>
            </div>
          </li>
                       <li>
             <a data-toggle="collapse" class="collapsed" href="#faq3">Which E-Currencies Do You Accept? <i class="fas fa-caret-down"></i></a>
             <div id="faq3" class="collapse" data-parent="#faq3">
              <p>
                We accept Perfect Money, Bitcoin, Ethereum, Litecoin, Dogecoin, Ripple, Tron, Bkash, and Nagad
              </p>
            </div>
          </li>
                       <li>
             <a data-toggle="collapse" class="collapsed" href="#faq2">Who can be a member of your company? <i class="fas fa-caret-down"></i></a>
             <div id="faq2" class="collapse" data-parent="#faq2">
              <p>
                Everyone can be a member of INFINITYUS, no matter your country or origin..
              </p>
            </div>
          </li>
                       <li>
             <a data-toggle="collapse" class="collapsed" href="#faq1">What is INFINITYUS ? <i class="fas fa-caret-down"></i></a>
             <div id="faq1" class="collapse" data-parent="#faq1">
              <p>
                INFINITYUS is an industrial trading and digital asset management platform.
              </p>
            </div>
          </li>
                  </ul>

      </div>
    </section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" ></script>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<script src="https://INFINITYUS.com/temp/lib/jquery.easing/jquery.easing.min.js"></script>
<script src="https://INFINITYUS.com/temp/lib/waypoints/jquery.waypoints.min.js"></script>
<script>
    var slider = tns({
      container: '#autoHeight',
      autoHeight: true,
      items: 1,
      slideBy: 'page',
      controls: false,
      autoplay: true,
      nav: false,
      speed: 500,
      mouseDrag: true,
      arrowKeys: true,
    });

</script>

<script>
    $(document).ready(function() {
        $(".toast").toast('show');
    });
</script>
@endsection
