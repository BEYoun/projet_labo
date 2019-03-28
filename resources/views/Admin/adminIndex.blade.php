@extends('defaultAdmin')

@section('content')
<div class="content mt-3">
      <div class="animated fadeIn">
            <div class="row">

                  <div class="col-md-4">
                        <div class="card">
                              <div class="card-body">
                                    <div class="mx-auto d-block">
                                          <img class="rounded-circle mx-auto d-block" src="{{ asset('designAdmin/images/admin.jpg') }}"
                                                alt="Card image cap">
                                          <h5 class="text-sm-center mt-2 mb-1">{{ $myProfile[0]->name }} {{ $myProfile[0]->firstName }}</h5>
                                          <div class="location text-sm-center"><i class="fa fa-map-marker"></i>
                                                California, United States</div>
                                    </div>
                                    <hr>
                                    <div class="card-text text-sm-center">
                                          <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                          <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                          <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                          <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                    </div>
                              </div>
                              <div class="card-footer">
                                    <strong class="card-title mb-3">Profile Card</strong>
                              </div>
                        </div>

                  </div>
            </div>

      </div>
</div>
<div class="col-md-4">

      <div class="content mt-3">
            <div class="animated">

                  <div class="card">
                        <div class="card-header">
                              <i class="mr-2 fa fa-align-justify"></i>
                              <strong class="card-title" v-if="headerText">Modals</strong>
                        </div>
                        <div class="card-body">

                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                                    data-target="#smallmodal">
                                    Mon contact
                              </button>

                              <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                                    data-target="#mediumModal">
                                    Ma presentation
                              </button>

                        </div>
                  </div>




                  <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="smallmodalLabel">Contact</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          <p>
                                               +212 {{ $myProfile[0]->tel }}
                                          </p>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                              </div>
                        </div>
                  </div>


                  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="mediumModalLabel">presentation</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                          <p>
                                                {{ $myProfile[0]["cv"]->presentation }}
                                          </p>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                              </div>
                        </div>
                  </div>



            </div><!-- .animated -->
      </div>
</div>
@endsection