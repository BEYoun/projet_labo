@extends('default')


@section('content')

<!-- == Home Section Start == -->
<section id="home">
	<!-- == Color schemes == -->
	<div class="color-schemes">
		<div class="color-handle">
			<i class="fa fa-cogs fa-spin" aria-hidden="true"></i>
		</div>
		<div class="color-plate">
			<h5>Chose color</h5>
			<a href="{{ asset('/design/css/colors/defaults-color.css') }}"
				class="single-color defaults-color">Defaults</a>
			<a href="{{ asset('/design/css/colors/red-color.css') }}" class="single-color red-color">Red</a>
			<a href="{{ asset('/design/css/colors/purple-color.css') }}"
				class="single-color purple-color">Purple</a>
			<a href="{{ asset('/design/css/colors/blue-color.css') }}" class="single-color pink-color">Pink</a>
		</div>
	</div>
	<!-- == /Color schemes == -->
	<!-- silider start -->
	<div class="main-slider-1 white-clr-all">
		<div id="carosel-mr-1" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carosel-mr-1" data-slide-to="0" class="active"></li>
				<li data-target="#carosel-mr-1" data-slide-to="1"></li>
				<li data-target="#carosel-mr-1" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner main-sld" role="listbox">
				<div class="item active main-sld">
					<!-- change slider image -->
					<div class="slider-bg"
						style="background-image: url('{{ asset('/design/image/slider/dummy-slider.jpg') }}');">
					</div>
					<div class="slider-cell">
						<div class="slider-ver">
							<div class="slider-con text-center">
								<h1>Grow Your <span>Business</span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
									expedita maxime culpa.</p>
								<a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical"
									href="#">View Demo</a>
								<a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical"
									href="#">Find More</a>
							</div>
							<!-- end slider content -->
						</div>
					</div>
				</div>
				<!-- end single item -->
				<div class="item main-sld">
					<!-- change slider image -->
					<div class="slider-bg"
						style="background-image: url('{{ asset('/design/image/slider/dummy-slider.jpg') }}');">
					</div>
					<div class="slider-cell">
						<div class="slider-ver">
							<div class="slider-con text-center">
								<h1>Grow Your <span>Businesss</span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
									expedita maxime culpa.</p>
								<a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical"
									href="#">View Demo</a>
								<a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical"
									href="#">Find More</a>
							</div>
							<!-- end slider content -->
						</div>
					</div>
				</div>
				<!-- end single item -->
				<div class="item main-sld">
					<!-- change slider image -->
					<div class="slider-bg"
						style="background-image: url('{{ asset('/design/image/slider/dummy-slider.jpg') }}');">
					</div>
					<div class="slider-cell">
						<div class="slider-ver">
							<div class="slider-con text-center">
								<h1>Increase Product <span>Sales </span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
									expedita maxime culpa.</p>
								<a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical"
									href="#">View Demo</a>
								<a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical"
									href="#">Find More</a>
							</div>
							<!-- end slider content -->
						</div>
					</div>
				</div>
				<!-- end single item -->
			</div>
			<a class="left slide-control-mr" href="#carosel-mr-1" role="button" data-slide="prev"><i
					class="fa fa-angle-left"></i></a>
			<a class="right slide-control-mr" href="#carosel-mr-1" role="button" data-slide="next"><i
					class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- end slider bar -->
	<!--slider section start-->
</section>
<!-- == Home Section End == -->

<!-- == About Section Start == -->
<section id="about" class="about section-padding-top">
	<div class="container">
		<div class="section-title">
			<h2>About <span>Us</span></h2>
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
				<!-- About text-->
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
				<!-- /About text -->
			</div>
		</div>
	</div>
</section>
<!-- == About Section End == -->
<!-- == Counter Section Start == -->
<section id="counter" class="counter-bg bg-opacity section-padding-60">
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
<!-- == Counter Section End == -->
<!-- == Team Section Start == -->
<section id="team" class="section-padding">
	<div class="container">
		<div class="section-title">
			<h2>Our Best <span>Team</span></h2>
			<span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
		</div>
		<div class="row">
			<!-- Single team item-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="team-single text-center m-b-30">
					<div class="team-img">
						<img src="{{ asset('/design/image/team/dummy-image.jpg') }}" alt=""
							class="img img-responsive">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="team-content">
						<h3><a href="single-team-page.html">John Doe</a></h3>
						<span>Founder</span>
					</div>
				</div>
			</div>
			<!-- Single team item-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="team-single text-center m-b-30">
					<div class="team-img">
						<img src="{{ asset('/design/image/team/dummy-image.jpg') }}" alt=""
							class="img img-responsive">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="team-content">
						<h3><a href="single-team-page.html">John Doe</a></h3>
						<span>CEO</span>
					</div>
				</div>
			</div>
			<!-- Single team item-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="team-single text-center m-b-30">
					<div class="team-img">
						<img src="{{ asset('/design/image/team/dummy-image.jpg') }}" alt=""
							class="img img-responsive">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="team-content">
						<h3><a href="single-team-page.html">John Doe</a></h3>
						<span>Managing Director</span>
					</div>
				</div>
			</div>
			<!-- Single team item-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="team-single text-center m-b-30">
					<div class="team-img">
						<img src="{{ asset('/design/image/team/dummy-image.jpg') }}" alt=""
							class="img img-responsive">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="team-content">
						<h3><a href="single-team-page.html">John Doe</a></h3>
						<span>Administrative Officer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- == Team Section End == -->

@endsection