@extends('defaultSuperAdmin')


@section('content')
<div class="breadcrumbs">
      <div class="col-sm-4">
            <div class="page-header float-left">
                  <div class="page-title">
                        <h1>Dashboard</h1>
                  </div>
            </div>
      </div>
      <div class="col-sm-8">
            <div class="page-header float-right">
                  <div class="page-title">
                        <ol class="breadcrumb text-right">
                              <li><a href="#">Dashboard</a></li>
                              <li><a href="#">Table</a></li>
                              <li class="active">Basic table</li>
                        </ol>
                  </div>
            </div>
      </div>
</div>
<link rel="stylesheet" href="{{ asset('/persoDesign/app.css') }}">
<div class="content mt-3">
      <div class="animated fadeIn">

            <div class="ui-typography">
                  <div class="row">
                        <div class="col-md-12">


                              <div class="card">
                                    <div class="card-header">
                                          <strong class="card-title" v-if="headerText">Typography</strong>
                                    </div>

                                    <div class="card-body">

                                          <div class="container_perso">
                                                <h2>Portfolio</h2>
                                                <div class="portfolio" id="js-portfolio">
                                                      <div class="project js-item">
                                                            <img src="http://via.placeholder.com/350x350" alt=""
                                                                  class="project__image">
                                                            <h2 class="project__name">lorem ipsu</h2>
                                                            <div class="project__description">Ipsa nostrum debitis
                                                                  exercitationem tempore cor</div>
                                                            <div class="project__body js-body">
                                                                  <h2>lorem ipsu present</h2>
                                                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                        elit. Quibusdam at pariatur expedita earum
                                                                        corrupti architecto quod minima deleniti
                                                                        veritatis fugit ratione, totam voluptatem
                                                                        praesentium. Ducimus iste vel expedita
                                                                        consectetur ea.</p>
                                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Dicta laboriosam error porro nam delectus
                                                                        nihil velit sequi voluptates quo! Ut vitae
                                                                        architecto voluptate laudantium consequatur
                                                                        impedit porro quos dolorem mollitia.</p>
                                                                  <p>
                                                                        <a href="#">En savoir plus</a>
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="project js-item">
                                                            <img src="http://via.placeholder.com/350x350" alt=""
                                                                  class="project__image">
                                                            <h2 class="project__name">lorem ipsu</h2>
                                                            <div class="project__description">Ipsa nostrum debitis
                                                                  exercitationem tempore cor</div>
                                                            <div class="project__body js-body">
                                                                  <h2>lorem ipsu present</h2>
                                                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                        elit. Quibusdam at pariatur expedita earum
                                                                        corrupti architecto quod minima deleniti
                                                                        veritatis fugit ratione, totam voluptatem
                                                                        praesentium. Ducimus iste vel expedita
                                                                        consectetur ea.</p>
                                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Dicta laboriosam error porro nam delectus
                                                                        nihil velit sequi voluptates quo! Ut vitae
                                                                        architecto voluptate laudantium consequatur
                                                                        impedit porro quos dolorem mollitia.</p>
                                                                  <p>
                                                                        <a href="#">En savoir plus</a>
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      
                                                      <div class="project js-item">
                                                            <img src="http://via.placeholder.com/350x350" alt=""
                                                                  class="project__image">
                                                            <h2 class="project__name">lorem ipsu</h2>
                                                            <div class="project__description">Ipsa nostrum debitis
                                                                  exercitationem tempore cor</div>
                                                            <div class="project__body js-body">
                                                                  <h2>lorem ipsu present</h2>
                                                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                        elit. Quibusdam at pariatur expedita earum
                                                                        corrupti architecto quod minima deleniti
                                                                        veritatis fugit ratione, totam voluptatem
                                                                        praesentium. Ducimus iste vel expedita
                                                                        consectetur ea.</p>
                                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Dicta laboriosam error porro nam delectus
                                                                        nihil velit sequi voluptates quo! Ut vitae
                                                                        architecto voluptate laudantium consequatur
                                                                        impedit porro quos dolorem mollitia.</p>
                                                                  <p>
                                                                        <a href="#">En savoir plus</a>
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="project js-item">
                                                            <img src="http://via.placeholder.com/350x350" alt=""
                                                                  class="project__image">
                                                            <h2 class="project__name">lorem ipsu</h2>
                                                            <div class="project__description">Ipsa nostrum debitis
                                                                  exercitationem tempore cor</div>
                                                            <div class="project__body js-body">
                                                                  <h2>lorem ipsu present</h2>
                                                                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                        elit. Quibusdam at pariatur expedita earum
                                                                        corrupti architecto quod minima deleniti
                                                                        veritatis fugit ratione, totam voluptatem
                                                                        praesentium. Ducimus iste vel expedita
                                                                        consectetur ea.</p>
                                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                        elit. Dicta laboriosam error porro nam delectus
                                                                        nihil velit sequi voluptates quo! Ut vitae
                                                                        architecto voluptate laudantium consequatur
                                                                        impedit porro quos dolorem mollitia.</p>
                                                                  <p>
                                                                        <a href="#">En savoir plus</a>
                                                                  </p>
                                                            </div>
                                                      </div>
                                                      <div class="project js-item">
                                                                  <img src="http://via.placeholder.com/350x350" alt=""
                                                                        class="project__image">
                                                                  <h2 class="project__name">lorem ipsu</h2>
                                                                  <div class="project__description">Ipsa nostrum debitis
                                                                        exercitationem tempore cor</div>
                                                                  <div class="project__body js-body">
                                                                        <h2>lorem ipsu present</h2>
                                                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                              elit. Quibusdam at pariatur expedita earum
                                                                              corrupti architecto quod minima deleniti
                                                                              veritatis fugit ratione, totam voluptatem
                                                                              praesentium. Ducimus iste vel expedita
                                                                              consectetur ea.</p>
                                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                              elit. Dicta laboriosam error porro nam delectus
                                                                              nihil velit sequi voluptates quo! Ut vitae
                                                                              architecto voluptate laudantium consequatur
                                                                              impedit porro quos dolorem mollitia.</p>
                                                                        <p>
                                                                              <a href="#">En savoir plus</a>
                                                                        </p>
                                                                  </div>
                                                            </div>
                                                            <div class="project js-item">
                                                                        <img src="http://via.placeholder.com/350x350" alt=""
                                                                              class="project__image">
                                                                        <h2 class="project__name">lorem ipsu</h2>
                                                                        <div class="project__description">Ipsa nostrum debitis
                                                                              exercitationem tempore cor</div>
                                                                        <div class="project__body js-body">
                                                                              <h2>lorem ipsu present</h2>
                                                                              <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                                    elit. Quibusdam at pariatur expedita earum
                                                                                    corrupti architecto quod minima deleniti
                                                                                    veritatis fugit ratione, totam voluptatem
                                                                                    praesentium. Ducimus iste vel expedita
                                                                                    consectetur ea.</p>
                                                                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                                    elit. Dicta laboriosam error porro nam delectus
                                                                                    nihil velit sequi voluptates quo! Ut vitae
                                                                                    architecto voluptate laudantium consequatur
                                                                                    impedit porro quos dolorem mollitia.</p>
                                                                              <p>
                                                                                    <a href="#">En savoir plus</a>
                                                                              </p>
                                                                        </div>
                                                                  </div>
                                                </div>
                                          </div>

                                    </div>
                              </div>


                        </div>
                  </div>
            </div>



      </div><!-- .animated -->
</div>
<script src="{{ asset('persoDesign/app.js') }}"></script>
<script src="{{ asset('persoDesign/polyfile.js') }}"></script>
@endsection