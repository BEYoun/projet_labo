<!DOCTYPE html>
<html lang="en">

<head>
      <title>Business: Business Multipurpose HTML template</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Business: Business Multipurpose HTML template">
      <meta name="keywords"
            content="bootweb, multipurpose, portfolio, personal, developer, designer, onepage, clean, minimal, modern">
      <meta name="author" content="Tanmoy Dhar">

      <!-- All CSS Files -->
      <link rel="shortcut icon" href="#" type="image/png">
      <link rel="stylesheet" href="{{ asset('/design/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/design/css/owl.carousel.css') }}">
      <link href="{{ asset('/design/css/slick.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/slicknav.min.css') }}">
      <link href="{{ asset('/design/css/slick-theme.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/font-awesome.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/icofont.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/jquery.lineProgressbar.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/owl.theme.default.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/design/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('/design/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('/design/css/responsive.css') }}">
      <link id="colors" rel="stylesheet" href="{{ asset('/design/css/colors/red-color.css') }}">

</head>

<body>
      <!-- ==== Preloader start ==== -->
      <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
      </div>
      <!-- ==== Preloader end ==== -->
      <!-- Header start -->
      <header>
            <div class="hidden-xs hidden-sm nav-top primary-bg">
                  <div class="container">
                        <div class="row">
                              <div class="col-sm-6">
                                    <div class="nav-top-access">
                                          <!-- Social links -->
                                          <ul>
                                                <li><i class="fa fa-phone"></i> +1-1459-236-756</li>
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                                      contact@yourdomain.com</li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="col-sm-6 text-right">
                                    <div class="nav-top-social">
                                          <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="menu-area">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-3">
                                    <div class="logo">
                                          <!--== change the logo name ==-->
                                          <a href="index.html">
                                                <h3><img src="{{ asset('/design/image/logo/logo.JPG') }}" alt=""
                                                            style="width: 90px"></h3>
                                          </a>
                                    </div>
                                    <!-- Responsive Menu Start -->
                                    <div class="responsive-menu"></div>
                                    <!-- Responsive Menu End -->
                              </div>
                              <div class="col-md-9 col-sm-12">
                                    <div class="mainmenu">
                                          <nav>
                                                <ul id="navigation">
                                                      <li class="current-page-item">
                                                            <a href="{{ route('welcome') }}">Home</a>

                                                      </li>
                                                      <li>
                                                            <a href="{{ route('about') }}">
                                                                  about us
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="{{ route('service') }}">Services</a>
                                                      </li>
                                                      <li>
                                                            <a href="{{ route('projects') }}">Projects</a>
                                                      </li>
                                                      <li>
                                                            <a href="{{ route('blog') }}">Blog</a>

                                                      </li>
                                                      <li>
                                                            <a href="{{ route('team') }}">Team</a>

                                                      </li>
                                                      <li>
                                                            @if (Auth::check())
                                                                  <a href="{{ url('superAdmin/superProfesseurs/') }}">retour</a>
                                                            @else
                                                                  <a href="{{ url('/auth/login') }}">Login</a>
                                                                
                                                            @endif

                                                      </li>

                                                </ul>
                                          </nav>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </header>
      <!-- Header End -->

      @yield('content')

      <!-- ==== footer section start ==== -->
      <footer class="footer-bg section-padding-top footer">
            <div class="footer-widget-area">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-3">
                                    <div class="f-widget">
                                          <a href="index.html">
                                                <!-- Change the logo here-->
                                                <h4 class="logo-text1"><img
                                                            src="{{ asset('/design/image/logo/logo.JPG') }}" alt=""
                                                            style="width: 90px"></h4>
                                          </a>
                                          <p class="m-t-30">Lorem ipsum dolor sit amet, adipiscing elit. Donec elit
                                                erat, vestibulum ac luctus id, ultrices.</p>
                                          <ul class="f-address">
                                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> 25/1 London
                                                      road, Brighum,London</li>
                                                <li><i class="fa fa-phone"></i> +1-1459-236-756</li>
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                                      contact@yourdomain.com</li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="f-widget">
                                          <div class="f-widget-title">
                                                <h4>Useful links</h4>
                                          </div>
                                          <ul class="useful-links">
                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                                            href="#">General Information For Users</a></li>
                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                                            href="#">Interactive Fairy Tales</a></li>
                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                                            href="#">Official Storybook Maker</a></li>
                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                                            href="#">Everyday Mathematics Links</a></li>
                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                                            href="#">Basic Knowledge</a></li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="f-widget">
                                          <div class="f-widget-title">
                                                <h4>Instagram Feeds</h4>
                                          </div>
                                          <ul class="instagram-widget">
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                                  src="{{ asset('/design/image/portfolio/dummy-image.jpg') }}"
                                                                  alt="" class="img-responsive"></a></li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="f-widget">
                                          <div class="f-widget-title">
                                                <h4>Newsletter</h4>
                                          </div>
                                          <p>Subscribe to our MailChimp newsletter and stay up to date with all events
                                                coming straight in your mailbox:</p>
                                          <div class="newsletter">
                                                <div class="input-group">
                                                      <input type="text" class="form-control"
                                                            placeholder="Your email Address" aria-label="Search for..."
                                                            autocomplete="off">
                                                      <span class="input-group-btn">
                                                            <button class="btn newsletter-btn" type="button"><i
                                                                        class="fa Example of paper-plane fa-paper-plane"></i></button>
                                                      </span>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="copyright-area">
                  <div class="container">
                        <div class="row text-center">
                              <div class="copyright-social">
                                    <ul class="social-profile">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                          <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                              </div>
                              <div class="copyright-text">
                                    <p>© Copyright 2018. All Rights Reserved. Designed by <a href="#">Synchrotheme</a>
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
      </footer>
      <!-- ==== footer section end ==== -->

      <!-- All JS Here -->
      <script src="{{ asset('/design/js/jquery.js') }}"></script>
      <script src="{{ asset('/design/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('/design/js/jquery.parallax-1.1.3.js') }}"></script>
      <script src="{{ asset('/design/js/slick.min.js') }}"></script>
      <script src="{{ asset('/design/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('/design/js/wow.min.js') }}"></script>
      <script src="{{ asset('/design/js/isotope.js') }}"></script>
      <script src="{{ asset('/design/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('/design/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('/design/js/jquery.lineProgressbar.js') }}"></script>
      <script src="{{ asset('/design/js/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('/design/js/jquery.slicknav.min.js') }}"></script>
      <script src="{{ asset('/design/js/tweetie.js') }}"></script>
      <script src="{{ asset('/design/js/main.js') }}"></script>

</body>

</html>