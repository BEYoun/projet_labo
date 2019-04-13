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
                <h2>Member Details</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Single Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="portfolio section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="member">
                    <img src="{{ asset('/design/image/team/dummy-image.jpg') }}" class="img-responsive" alt="">
                    <ul class="member-social text-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="name font-24">Equipe X1</h4>
                <h5 class="post mt-5">information</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi
                    doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi
                    reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae
                    possimus placeat quidem ipsam voluptates similique libero tempore</p>

            </div>

        </div>

       
            <!-- start blog-main-section -->
            <section class="blog-main-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9">
                            <div class="blog-grids-s2 blog-content-wrapper">
                                <div class="row">
                                    <div class="col-md-6 m-b-30">
                                        <div class="grid">
                                            <div class="entry-header">
                                            <img src="{{ asset('/design/image/blog/dummy-image.jpg') }}" alt="" class="img img-responsive">
                                            </div>
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>Post by: <a href="#">admin</a></li>
                                                        <li><i class="fa fa-calendar"></i> <a href="#">07 Jan 2018</a></li>
                                                        <li><i class="fa fa-commenting"></i> <a href="#">10 Comments</a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-details">
                                                    <h3><a href="#">First Firework in New York City</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor
                                                        incididunt ut labore</p>
                                                    <a href="#">Read More <i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 m-b-30">
                                        <div class="grid">
                                            <div class="entry-header">
                                                <img src="{{ asset('/design/image/blog/dummy-image.jpg') }}" alt="" class="img img-responsive">
                                            </div>
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>Post by: <a href="#">admin</a></li>
                                                        <li><i class="fa fa-calendar"></i> <a href="#">07 Jan 2018</a></li>
                                                        <li><i class="fa fa-commenting"></i> <a href="#">10 Comments</a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-details">
                                                    <h3><a href="#">First Firework in New York City</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor
                                                        incididunt ut labore</p>
                                                    <a href="#">Read More <i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 m-b-30">
                                        <div class="grid">
                                            <div class="entry-header">
                                                <img src="{{ asset('/design/image/blog/dummy-image.jpg') }}" alt="" class="img img-responsive">
                                            </div>
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>Post by: <a href="#">admin</a></li>
                                                        <li><i class="fa fa-calendar"></i> <a href="#">07 Jan 2018</a></li>
                                                        <li><i class="fa fa-commenting"></i> <a href="#">10 Comments</a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-details">
                                                    <h3><a href="#">First Firework in New York City</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor
                                                        incididunt ut labore</p>
                                                    <a href="#">Read More <i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 m-b-30">
                                        <div class="grid">
                                            <div class="entry-header">
                                                <img src="{{ asset('/design/image/blog/dummy-image.jpg') }}" alt="" class="img img-responsive">
                                            </div>
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>Post by: <a href="#">admin</a></li>
                                                        <li><i class="fa fa-calendar"></i> <a href="#">07 Jan 2018</a></li>
                                                        <li><i class="fa fa-commenting"></i> <a href="#">10 Comments</a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-details">
                                                    <h3><a href="#">First Firework in New York City</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor
                                                        incididunt ut labore</p>
                                                    <a href="#">Read More <i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div class="col col-lg-3">
                            <div class="blog-sidebar">
                                <div class="widget search-widget">
                                    <form class="form">
                                        <div>
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="widget recent-posts-widget">
                                    <h3>Recent posts</h3>
                                    <div class="post">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></h4>
                                        <span class="date">Aug 08, 2017</span>
                                    </div>
                                    <div class="post">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                                        <span class="date">Aug 08, 2017</span>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end blog-main-section -->
        

        <div class="row0">
            <div class="col-md-12">
               <div class="contact-info contact-bottom text-center ">
                    <h4>Membre</h4>
               </div>
            </div>
        </div>
        <!-- Single team item-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-single text-center m-b-30">

                <div class="team-img">
                    <img src="http://localhost/hafidi/public/design/image/team/dummy-image.jpg" alt=""
                        class="img img-responsive">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3><a href="http://localhost/hafidi/public/singleTeamPage">John Doe</a></h3>
                    <span>Founder</span>
                </div>
            </div>
        </div>
        <!-- Single team item-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-single text-center m-b-30">

                <div class="team-img">
                    <img src="http://localhost/hafidi/public/design/image/team/dummy-image.jpg" alt=""
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
                    <img src="http://localhost/hafidi/public/design/image/team/dummy-image.jpg" alt=""
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
                    <img src="http://localhost/hafidi/public/design/image/team/dummy-image.jpg" alt=""
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
</section>
@endsection