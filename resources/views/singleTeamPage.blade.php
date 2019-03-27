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
                <h4 class="name font-24">John Doe</h4>
                 <h5 class="post mt-5">Founder</h5>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore</p>
       
            </div>
            <div class="col-md-4">
                <h5 class="skill-heading">My Skills</h5>
                <div class="skill-item">
                    <h5>HTML5 & CSS3</h5>
                    <div id="html"></div>
                </div>
                <div class="skill-item">
                    <h5>JavaScript, PHP</h5>
                    <div id="php"></div>
                </div>
                 <div class="skill-item">
                    <h5>Bootstrap, JQuery</h5>
                    <div id="bootstrap"></div>
                </div>
                 <div class="skill-item">
                    <h5>SEO</h5>
                    <div id="seo"></div>
                </div>
                 <div class="skill-item">
                    <h5>Illustrator</h5>
                    <div id="illustrator"></div>
                </div>
            </div>
        </div>
                <div class="row0">
              <div class="col-md-3">
                 <div class="contact-info contact-bottom text-center ">
                      <span><i class="fa fa-map-marker"></i></span>
                      <h4>My Address</h4>
                      <h6>25/1 London road, Brighum,London</h6>
                 </div>
              </div>
              <div class="col-md-3">
                  <div class="contact-info contact-bottom text-center">
                      <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                      <h4>Call Me</h4>
                      <h6>+1 916-875-2586-458
                   </h6>
                 </div>
              </div>
              <div class="col-md-3">
                  <div class="contact-info contact-bottom text-center">
                      <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <h4>Email Me</h4>
                      <h6>info@domaim.com</h6>
                 </div>
              </div>
              <div class="col-md-3">
                  <div class="contact-info contact-bottom text-center">
                      <span><i class="fa fa-download" aria-hidden="true"></i></span>
                      <h4>Resume Download</h4>
                      <h6><a href="image/cv.pdf" download="">Cv.PDF</a></h6>
                 </div>
              </div>
           </div>
    </div>
   </section>
@endsection