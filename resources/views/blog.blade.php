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
                               <h2>Blog</h2>
                               <div class="breadcrumb">
                                     <ul>
                                           <li><a href="#">Home</a></li>
                                           <li>Blog</li>
                                     </ul>
                               </div>
                         </div>
                   </div>
             </div>
       </section>
      <!-- start blog-main-section -->
           <section class="blog-main-section section-padding">
               <div class="container">
                  <div class="row">
                        <div class="col col-lg-12">
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
                                                   <h3><a href="{{ route('detailBlog') }}">First Firework in New York City</a></h3>
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore</p>
                                                   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="pagi m-t-0 text-center">
                               <ul>
                                   <li>
                                       <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                                   </li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li>
                                       <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                  </div>
         
               </div> <!-- end container -->
           </section>
           <!-- end blog-main-section -->     
   
@endsection