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
                        <h2>About Us</h2>
                        <div class="breadcrumb">
                              <ul>
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li>About Us</li>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>
</section>
<section class="about section-padding">
      <div class="container">
            <div class="section-title">
                  <h2>Let’s Introduce <span>Ourselves</span></h2>
                  <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
            </div>
            <div class="row">
                  <!-- About image -->
                  <div class="col-md-6">
                        <a href="#" class="img-about">
                              <img src="{{ asset('/design/image/about/dummy-image.jpg') }}" alt=""
                                    class="img-responsive">
                        </a>
                  </div>
                  <div class="col-md-6">
                        <div class="about-details">
                              <h5>WHAT WE ARE</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus pulvinar.
                                    Donec sodales tortor vitae leo bibendum tincidunt. Suspendisse posuere quam eget
                                    porta tempor. Cras tempor bibendum libero, non semper velit bibendum. Integer
                                    posuere augue eu feugiat congue.</p>
                              <ul class="image-contact-list">
                                    <li><i class="icofont icofont-speech-comments"></i> <span> Reliable and Secure
                                                Platform</span></li>
                                    <li><i class="icofont icofont-package"></i> <span>Everything is perfectly
                                                organized</span></li>
                                    <li><i class="icofont icofont-settings"></i> <span>Simple Line Icon</span></li>
                                    <li><i class="icofont icofont-gift"></i> <span>Step on the new level</span></li>

                              </ul>
                              <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="#">Read More</a>
                        </div>
                  </div>
            </div>

      </div>
</section>

<section class="testimonial section-padding-top bg-silver">
      <div class="container">
            <div class="section-title">
                  <h2>WHAT <span>CLIENT</span> SAY</h2>
                  <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
            </div>
            <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                        <div class=" testimonial-slide one-item">
                              <div id="testimonial" class="swiper-wrapper owl-carousel">
                                    <div class="swiper-slide">
                                          <div class="testimonial-item style-4">
                                                <div class="testimonial-thumb">
                                                      <!-- image -->
                                                      <img src="{{ asset('/design/image/user/dummy-image.jpg') }}"
                                                            alt="">
                                                </div>
                                                <div class="review-txt">
                                                      <span>“</span>
                                                      <p>Natus voluptatum enim quod necessitatibus quis expedita harum
                                                            provident eos obcaecati id culpa corporis molestias.</p>
                                                      <span>”</span>
                                                </div>
                                                <div class="reviewer-details">
                                                      <h3 class="reviewer-name"> - Collis Ta'eed</h3>
                                                      <h4 class="reviewer-deg">XYZ Inc.</h4>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="testimonial-item style-4">
                                                <div class="testimonial-thumb">
                                                      <!-- image -->
                                                      <img src="{{ asset('/design/image/user/dummy-image.jpg') }}"
                                                            alt="">
                                                </div>
                                                <div class="review-txt">
                                                      <span>“</span>
                                                      <p>Natus voluptatum enim quod necessitatibus quis expedita harum
                                                            provident eos obcaecati id culpa corporis molestias.</p>
                                                      <span>”</span>
                                                </div>
                                                <div class="reviewer-details">
                                                      <h3 class="reviewer-name"> - jara jordan</h3>
                                                      <h4 class="reviewer-deg">XYZ Inc.</h4>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="testimonial-item style-4">
                                                <div class="testimonial-thumb">
                                                      <!-- image -->
                                                      <img src="{{ asset('/design/image/user/dummy-image.jpg') }}"
                                                            alt="">
                                                </div>
                                                <div class="review-txt">
                                                      <span>“</span>
                                                      <p>Natus voluptatum enim quod necessitatibus quis expedita harum
                                                            provident eos obcaecati id culpa corporis molestias.</p>
                                                      <span>”</span>
                                                </div>
                                                <div class="reviewer-details">
                                                      <h3 class="reviewer-name"> - mila john</h3>
                                                      <h4 class="reviewer-deg">XYZ Inc.</h4>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>

@endsection