    @php
        $setting = App\Models\Settings::first();
    @endphp
    <!DOCTYPE html>
    <html lang="en">


    <!--   06:37:19 GMT -->

    <head>
        <meta charset="UTF-8">

        <title>@yield('title')</title>
        <meta name='description' itemprop='description' content='{{ $setting->site_description }}' />
        <meta name='keywords' content='{{ $setting->site_keywords }}' />
        <meta property='article:section' content='facility management service' />

        <!-- responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- master stylesheet -->
        <link rel="stylesheet" href="{{ asset('public/main/css/style.css') }}">
        <!-- Responsive stylesheet -->
        <link rel="stylesheet" href="{{ asset('public/main/css/responsive.css') }}">
        <!-- Favicon -->

        <link rel="shortcut icon" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">


        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

        <style>
            #blink {
                font-size: 22px;
                font-weight: bold;
                color: red;
                transition: 0.5s;
            }

        </style>

    </head>

    <body>

        <div class="boxed_wrapper">
            {{-- <div class="preloader"></div> --}}

            <!-- Start Top Bar style1 -->
            <section class="top-bar-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="top-style1 clearfix">
                                <p id="blink"> {{ $setting->flash_message }} </p>

                                <!--	<p style='color:white'>SYSTEQ Facility Management & Security Services (India) Private Limited</p>-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Top Bar style1 -->

            <!--Start Main Header-->
            <header class="main-header header-style1">

                <div class="header-upper-style1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="inner-container clearfix">
                                    <div class="logo-box-style1 float-left">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ SITE_LOGO_IMAGE_URL . '/' . $setting->id . '/' . $setting->site_logo }}"
                                                alt="{{ $setting->short_description }}">
                                        </a>

                                    </div>

                                    <div class="main-menu-box float-right">
                                        <nav class="main-menu clearfix">
                                            <div class="navbar-header clearfix">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target=".navbar-collapse">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="navbar-collapse collapse clearfix">
                                                <ul class="navigation clearfix">
                                                    <li class="dropdown current"><a href="{{ url('/') }}">Home</a>

                                                    </li>
                                                    <li class="dropdown"><a href="{{ url('about') }}">About Us</a>

                                                    </li>
                                                    <li class="dropdown"><a href="{{ url('services') }}">Services</a>
                                                    </li>
                                                    <li class="dropdown"><a href="{{ url('teams') }}">Our Team</a>

                                                    </li>
                                                    <li class="dropdown"><a href="{{ url('blog') }}">Blog</a>
                                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                        <!--    <div class="mainmenu-right">
                                        <div class="outer-search-box">
                                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                                            <ul class="search-box">
                                                <li>
                                                    <form method="post" action="#">
                                                        <div class="form-group">
                                                            <input type="search" name="search" placeholder="Search Here" required>
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cart-box">
                                            <a href="shoping-cart.html"><span class="icon-bag"><span class="number">0</span></span></a>
                                        </div>
                                    </div>-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-lower-style1">
                    <div class="container">
                        <marquee style='color:red'> {{ $setting->marquee_message }} </marquee>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="inner-content clearfix">
                                    <ul class="header-contact-info float-left">
                                        <li>
                                            <div class="single-item">
                                                <div class="icon">
                                                    <span class="icon-maps-and-location"></span>
                                                </div>
                                                <div class="text">
                                                    <h3>{{ $setting->city }}, {{ $setting->country }}</h3>
                                                    <p style="width: 300px">{{ $setting->address }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-item">
                                                <div class="icon">
                                                    <span class="icon-phone"></span>
                                                </div>
                                                <div class="text">
                                                    <h3>{{ $setting->phone }}</h3>
                                                    <p>Mon - Friday: 9.00am to 9.00pm</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-item">
                                                <div class="icon">
                                                    <span class="icon-mail"></span>
                                                </div>
                                                <div class="text">
                                                    <h3 style='text-transform: lowercase !important; '>
                                                        {{ $setting->email }}</h3>
                                                    <p>Get a Free Quote</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="header-social-links-style1 float-right">
                                        @if (!empty($setting->facebook))
                                            <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                                <a href="{{ $setting->facebook }}" target="_blank"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                        @if (!empty($setting->whatsapp))
                                            <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                                <a href="https://api.whatsapp.com/send?phone={{ $setting->whatsapp }}"
                                                    target="_blank"><i class="fa fa-whatsapp"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                        @if (!empty($setting->linkedin))
                                            <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                                <a href="{{ $setting->linkedin }}"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Main Header-->

            @yield('content');

            <!--Start footer area-->
            <footer class="footer-area">
                <div class="footer-shape-bg wow slideInRight" data-wow-delay="300ms" data-wow-duration="2500ms"></div>
                <div class="container">
                    <div class="row">
                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget marbtm50">
                                <div class="contact-info-box">
                                    <div class="footer-logo">
                                        <a href="index-2.html">
                                            <img src="{{ SITE_LOGO_IMAGE_URL . '/' . $setting->id . '/' . $setting->site_logo }}"
                                                alt="{{ $setting->short_description }}" alt="Awesome Logo">
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <h6>Address</h6>
                                            <p>{{ $setting->city }}, {{ $setting->country }}</p>
                                            <p>{{ $setting->address }}</p>
                                        </li>
                                        <li>
                                            <h6>Phone</h6>
                                            <p>{{ $setting->phone }}<br> <span>Mon - Friday:</span> 9.00am to 9.00pm
                                            </p>
                                        </li>
                                        <li>
                                            <h6>Email</h6>
                                            <p>{{ $setting->email }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->
                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget marbtm50">
                                <div class="title">
                                    <h3>Services</h3>
                                </div>
                                <div class="services-links">
                                    <ul>
                                        <li><a>HOUSE KEEPING</a></li>
                                        <li><a>GARDENING MAINTENANCE</a></li>
                                        <li><a>ELECTRICAL MAINTENANCE</a></li>
                                        <li><a>PLUMBING MAINTENANCE</a></li>
                                        <li><a>SWIMMING POOL MAINTENANCE</a></li>
                                        <li><a>SECURITY SERVICES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->
                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget marbtm50">
                                <div class="title">
                                    <h3>Link</h3>
                                </div>
                                <div class="services-links">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('about') }}">About Us</a></li>
                                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                        @foreach (App\Models\Page::all() as $item)
                                            <li><a href="{{ url('pages/' . $item->slug) }}">{{ $item->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->
                        @php
                            $services = App\Models\Services::get();
                        @endphp
                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget">
                                <div class="brochures-carousel-box owl-carousel owl-theme">
                                    <!--Start Single Item-->
                                    @foreach ($services as $service)
                                        <div class="single-item">
                                            <div class="img-holder">
                                                <img src="{{ SERVICE_IMAGE_URL . '/' . $service->id . '/' . $service->image }}"
                                                    alt="Awesome Image">
                                            </div>
                                            <div class="title-holder">
                                                <h3>{{ $service->title }}</h3>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->
                    </div>
                </div>
            </footer>
            <!--End footer area-->

            <!--Start footer bottom area-->
            <section class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-bottom-content flex-box-two">
                                <div class="copyright-text">
                                    <p><a href="#">{{ $setting->copyright }}</a></p>
                                </div>
                                <div class="footer-social-links float-right">
                                    <span>We are On:</span>
                                    <ul class="sociallinks-style-one">
                                        @if (!empty($setting->facebook))
                                            <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                                <a href="{{ $setting->facebook }}" target="_blank"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                        @if (!empty($setting->twitter))
                                            <li class="wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                <a href="{{ $setting->twitter }}"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                        @if (!empty($setting->skype))
                                            <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                                <a href="{{ $setting->skype }}"><i class="fa fa-skype"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                        @if (!empty($setting->linkedin))
                                            <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End footer bottom area-->

        </div>






        <script src="{{ asset('public/main/js/jquery.js') }}"></script>
        <script src="{{ asset('public/main/js/appear.js') }}"></script>
        <script src="{{ asset('public/main/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/main/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('public/main/js/isotope.js') }}"></script>
        <script src="{{ asset('public/main/js/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('public/main/js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('public/main/js/jquery.easing.min.js') }}"></script>

        <script src="{{ asset('public/main/js/jquery.paroller.min.js') }}"></script>
        <script src="{{ asset('public/main/js/owl.js') }}"></script>
        <script src="{{ asset('public/main/js/wow.js') }}"></script>


        <script src="{{ asset('public/main/js/map-helper.js') }}"></script>

        <script src="{{ asset('public/main/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
        <script src="{{ asset('public/main/assets/timepicker/timePicker.js') }}"></script>
        <script src="{{ asset('public/main/assets/html5lightbox/html5lightbox.js') }}"></script>

        <!--Revolution Slider-->
        <script src="{{ asset('public/main/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('public/main/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
        </script>
        <script src="{{ asset('public/main/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('public/main/js/main-slider-script.js') }}"></script>

        <!-- thm custom script -->
        <script src="{{ asset('public/main/js/custom.js') }}"></script>

        <script type="text/javascript">
            var blink = document.getElementById('blink');
            setInterval(function() {
                blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
            }, 900);
        </script>
    </body>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>


    <!--   06:40:40 GMT -->

    </html>
