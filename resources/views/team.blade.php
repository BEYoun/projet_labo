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
        <div class="row" style="padding-left: 30%">
            <div class="col-md-7 col-sm-6 col-xs-12">
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
                        <span>Foundser</span>
                    </div>
                </div>
            </div>
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
<section class="testimonial section-padding-top bg-silver">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-xs-12">
                <div class="panel-group accordion-s1" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                class="collapsed">Equipe X1</a>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false"
                            style="height: 0px;">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra turpis
                                    sit amet eleifend scelerisque. Quisque consequat tortor et lacinia malesuada. Proin
                                    in pellentesque dolor. Integer egestas malesuada erat, sed dapibus lectus ornare at.
                                    Donec mollis libero velit, nec tincidunt lectus elementum vel. Suspendisse lobortis
                                    pellentesque velit at tincidunt. Cras sit amet porta erat, nec vulputate tortor.
                                    Nulla libero est, tincidunt sed tincidunt id, volutpat et lectus. Nam eu risus
                                    lacus. Integer egestas malesuada erat, sed dapibus lectus ornare at. Donec mollis
                                    libero velit, nec tincidunt lectus elementum vel.</p>
                            </div>
                            <a href="{{ url('/singleEquipePage') }}">plus d info</a>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                aria-expanded="false">Equipe X2</a>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false"
                            style="height: 0px;">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra turpis
                                    sit amet eleifend scelerisque. Quisque consequat tortor et lacinia malesuada. Proin
                                    in pellentesque dolor. Integer egestas malesuada erat, sed dapibus lectus ornare at.
                                    Donec mollis libero velit, nec tincidunt lectus elementum vel. Suspendisse lobortis
                                    pellentesque velit at tincidunt. Cras sit amet porta erat, nec vulputate tortor.
                                    Nulla libero est, tincidunt sed tincidunt id, volutpat et lectus. Nam eu risus
                                    lacus. Integer egestas malesuada erat, sed dapibus lectus ornare at. Donec mollis
                                    libero velit, nec tincidunt lectus elementum vel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsethree"
                                aria-expanded="false">Equipe X3</a>
                        </div>

                        <div id="collapsethree" class="panel-collapse collapse" aria-expanded="false"
                            style="height: 0px;">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra turpis
                                    sit amet eleifend scelerisque. Quisque consequat tortor et lacinia malesuada. Proin
                                    in pellentesque dolor. Integer egestas malesuada erat, sed dapibus lectus ornare at.
                                    Donec mollis libero velit, nec tincidunt lectus elementum vel. Suspendisse lobortis
                                    pellentesque velit at tincidunt. Cras sit amet porta erat, nec vulputate tortor.
                                    Nulla libero est, tincidunt sed tincidunt id, volutpat et lectus. Nam eu risus
                                    lacus. Integer egestas malesuada erat, sed dapibus lectus ornare at. Donec mollis
                                    libero velit, nec tincidunt lectus elementum vel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour"
                                aria-expanded="false">Equipe X4</a>
                        </div>

                        <div id="collapsefour" class="panel-collapse collapse" aria-expanded="false"
                            style="height: 0px;">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra turpis
                                    sit amet eleifend scelerisque. Quisque consequat tortor et lacinia malesuada. Proin
                                    in pellentesque dolor. Integer egestas malesuada erat, sed dapibus lectus ornare at.
                                    Donec mollis libero velit, nec tincidunt lectus elementum vel. Suspendisse lobortis
                                    pellentesque velit at tincidunt. Cras sit amet porta erat, nec vulputate tortor.
                                    Nulla libero est, tincidunt sed tincidunt id, volutpat et lectus. Nam eu risus
                                    lacus. Integer egestas malesuada erat, sed dapibus lectus ornare at. Donec mollis
                                    libero velit, nec tincidunt lectus elementum vel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapsefive"
                                aria-expanded="true">Equipe X5</a>
                        </div>

                        <div id="collapsefive" class="panel-collapse collapse in" aria-expanded="true" style="">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra turpis
                                    sit amet eleifend scelerisque. Quisque consequat tortor et lacinia malesuada. Proin
                                    in pellentesque dolor. Integer egestas malesuada erat, sed dapibus lectus ornare at.
                                    Donec mollis libero velit, nec tincidunt lectus elementum vel. Suspendisse lobortis
                                    pellentesque velit at tincidunt. Cras sit amet porta erat, nec vulputate tortor.
                                    Nulla libero est, tincidunt sed tincidunt id, volutpat et lectus. Nam eu risus
                                    lacus. Integer egestas malesuada erat, sed dapibus lectus ornare at. Donec mollis
                                    libero velit, nec tincidunt lectus elementum vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="faq-text text-center">
                    <h1>Equipe</h1><br>
                    <h5><span>F</span>requently <span>A</span>sked <span>Q</span>uestions</h5>
                </div>
            </div>
        </div> <!-- end row -->

    </div>
</section>
@endsection