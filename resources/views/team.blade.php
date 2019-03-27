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
                         <h2>Our Best Team</h2>
                         <div class="breadcrumb">
                               <ul>
                                     <li><a href="#">Home</a></li>
                                     <li>Team</li>
                               </ul>
                         </div>
                   </div>
             </div>
       </div>
 </section>


<section class="portfolio section-padding">
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
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
                     <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                 </div>
                  <div class="team-content">
                     <h3><a href="{{ asset('singleTeamPage') }}">John Doe</a></h3>
                     <span>Founder</span>
                 </div>
             </div>
         </div>
         <!-- Single team item-->	
             <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="team-single text-center m-b-30">
                
                 <div class="team-img">
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
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
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
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
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
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
               <!-- Single team item-->  
     <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="team-single text-center m-b-30">
                
                 <div class="team-img">
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
                     <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                    <h3><a href="single-team-page.html">John Doe</a></h3>
                     <span>Analytics Officer</span>
                 </div>
             </div>
         </div>
               <!-- Single team item-->  
     <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="team-single text-center m-b-30">
                
                 <div class="team-img">
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
                     <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3><a href="single-team-page.html">John Doe</a></h3>
                     <span>Customer Officer</span>
                 </div>
             </div>
         </div>
               <!-- Single team item-->  
     <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="team-single text-center m-b-30">
                
                 <div class="team-img">
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
                     <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3><a href="single-team-page.html">John Doe</a></h3>
                     <span>Design Officer</span>
                 </div>
             </div>
         </div>
               <!-- Single team item-->  
     <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="team-single text-center m-b-30">
                
                 <div class="team-img">
                     <img src="{{ asset('/design/image/team/dummy-image.jpg')}}" alt="" class="img img-responsive">
                     <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3><a href="single-team-page.html">John Doe</a></h3>
                     <span>Information Security Officer</span>
                 </div>
             </div>
         </div>
         </div>
   </div>
</section>

@endsection