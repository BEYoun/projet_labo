@extends('default')

@section('content')
<!-- == Color schemes == -->
<div class="color-schemes">
            <div class="color-handle">
              <i class="fa fa-cogs fa-spin" aria-hidden="true"></i>
            </div>
            <div class="color-plate">
              <h5>Chose color</h5>
              <a href="css/colors/defaults-color.css" class="single-color defaults-color">Defaults</a>
              <a href="css/colors/red-color.css" class="single-color red-color">Red</a>
              <a href="css/colors/purple-color.css" class="single-color purple-color">Purple</a>
              <a href="css/colors/sky-color.css" class="single-color sky-color">sky</a>
              <a href="css/colors/green-color.css" class="single-color green-color">Green</a>
              <a href="css/colors/blue-color.css" class="single-color pink-color">Pink</a>
            </div>
          </div>
          <!-- == /Color schemes == -->
          <section class="page-title page-bg bg-opacity section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Our Service</h2>
                  <div class="breadcrumb">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li>Service</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="service section-padding">
            <div class="container">
              <div class="section-title">
                <h2>Our <span>Services</span></h2>
                <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
              </div>
              <div class="row content service-grid-s1">
                <!-- single serivce-->
                <div class="col-md-4 col-sm-6">
                  <div class="grid">
                    <div class="icon"><i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="details">
                      <h3><a href="#">Financial Planning</a></h3>
                      <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on
                        run consist</p>
                    </div>
                  </div>
                </div>
                <!-- single serivce-->
                <div class="col-md-4 col-sm-6">
                  <div class="grid">
                    <div class="icon"><i class="fa fa-credit-card"></i>
                    </div>
                    <div class="details">
                      <h3><a href="#">Business Loan </a></h3>
                      <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on
                        run consist</p>
                    </div>
                  </div>
                </div>
                <!-- single serivce-->
                <div class="col-md-4 col-sm-6">
                  <div class="grid">
                    <div class="icon"><i class="fa fa-subway"></i>
                    </div>
                    <div class="details">
                      <h3><a href="#">Retairement Planning</a></h3>
                      <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on
                        run consist</p>
                    </div>
                  </div>
                </div>
                <!-- single serivce-->
                <div class="col-md-4 col-sm-6">
                  <div class="grid">
                    <div class="icon"><i class="fa fa-archive"></i>
                    </div>
                    <div class="details">
                      <h3><a href="#">Insurance Consulting </a></h3>
                      <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on
                        run consist</p>
                    </div>
                  </div>
                </div>
                <!-- single serivce-->
                <div class="col-md-4 col-sm-6">
                  <div class="grid">
                    <div class="icon"><i class="fa fa-rocket"></i>
                    </div>
                    <div class="details">
                      <h3><a href="#">Taxes Planning</a></h3>
                      <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on
                        run consist</p>
                    </div>
                  </div>
                </div>
                <!-- single serivce-->
                <div class="col-md-4 col-sm-6">
                  <div class="grid">
                    <div class="icon"><i class="fa fa-universal-access"></i>
                    </div>
                    <div class="details">
                      <h3><a href="#">Mutual funds</a></h3>
                      <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on
                        run consist</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="counter-bg bg-opacity section-padding-60">
            <div class="container">
              <div class="row">
                <!-- Counter item-->
                <div class="col-md-3 col-sm-6">
                  <div class="counter-item style-2">
                    <div class="counter-item-inner">
                      <i class="fa fa-desktop" aria-hidden="true"></i>
                      <h4>Projects Done</h4>
                      <span class="counter">1000</span>
        
                    </div>
                  </div>
                </div>
                <!-- Counter item-->
                <div class="col-md-3 col-sm-6">
                  <div class="counter-item style-2">
                    <div class="counter-item-inner">
                      <div class="icon"></div>
                      <i class="fa fa-smile-o"></i>
                      <h4>Happy Clients</h4>
                      <span class="counter">2000</span>
                    </div>
                  </div>
                </div>
                <!-- Counter item-->
                <div class="col-md-3 col-sm-6">
                  <div class="counter-item style-2">
                    <div class="counter-item-inner">
                      <div class="icon"></div>
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <h4>Employees</h4>
                      <span class="counter">215</span>
                    </div>
                  </div>
                </div>
                <!-- Counter item-->
                <div class="col-md-3 col-sm-6">
                  <div class="counter-item style-2">
                    <div class="counter-item-inner">
                      <div class="icon"></div>
                      <i class="fa fa-trophy" aria-hidden="true"></i>
                      <h4>Awards</h4>
                      <span class="counter">3000</span>
        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <section class="clients bg-silver">
            <div class="container ptb-40 ">
              <div class="row">
                <div class="col-md-12">
                  <div id="owl-clients-6" class="owl-carousel clients-logo text-center">
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                    <div class="item">
                      <a href="#"><img alt="" src="{{ asset('/design/image/logo/dummy-image.png') }}"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection