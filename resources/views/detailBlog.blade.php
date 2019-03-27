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
<!-- start blog-details-post -->
<section class="blog-details-post section-padding">
      <div class="container">
            <div class="row">
                  <div class="col col-lg-9">
                        <div class="post-content">
                              <div class="blog-grids-s2 blog-content-wrapper">
                                    <div class="entry-media">
                                          <img src="{{ asset('/design/image/blog/dummy-image.jpg') }}" alt="" class="img img-responsive">
                                    </div>
                                    <div class="entry-header">
                                          <div class="entry-meta">
                                                <ul>
                                                      <li><i class="fa fa-user"></i>Post by: <a href="#">admin</a></li>
                                                      <li><i class="fa fa-calendar"></i> <a href="#">06 Aug 2017</a>
                                                      </li>
                                                      <li><i class="fa fa-commenting"></i> <a href="#">5 Comments</a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="entry-title">
                                                <h2>Business Consulting Conference</h2>
                                          </div>
                                    </div>
                              </div>
                              <div class="entry-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                          nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                          eu</p>
                                    <blockquote>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.
                                                <br>

                                                -Someone famous in Source Title</p>
                                    </blockquote>
                                    <p>Nulla suscipit est et ipsum tincidunt sagittis. Curabitur rutrum suscipit nulla
                                          at scelerisque. In pharetra purus vitae risus sollicitudin aliquam. Proin non
                                          ex nunc. Praesent quis fermentum diam. Aliquam a malesuada eros, a euismod
                                          magna. Nulla viverra mi sed lectus viverra, et molestie magna dictum.</p>
                              </div>
                              <div class="tag-social-share">
                                    <div class="tag">
                                          <a href="#">Finance</a>
                                          <a href="#">Business</a>
                                          <a href="#">Consulting</a>
                                    </div>
                                    <div class="social-share">
                                          <span>Share:</span>
                                          <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="comments-area">
                                    <h3 class="comments-title">Comments</h3>
                                    <ol class="comment-list">
                                          <li>
                                                <article>
                                                      <div class="comment-meta">
                                                            <div class="comment-author-metadata">
                                                                  <img src="{{ asset('/design/image/user/dummy-image.jpg') }}" alt=""
                                                                        class="img-circle avatar">
                                                                  <h4><a href="#">John Doe</a></h4>
                                                                  <div class="comment-metadata">
                                                                        <a href="#">June 4, 2017 at 08:00 AM</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                  sed do eiusmod tempor incididunt ut labore et dolore
                                                                  magna et sed aliqua. Ut enim ea commodo consequat...
                                                            </p>
                                                      </div>
                                                      <div class="review">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                      </div>
                                                </article>

                                                <ol>
                                                      <li>
                                                            <article>
                                                                  <div class="comment-meta">
                                                                        <div class="comment-author-metadata">
                                                                              <img src="{{ asset('/design/image/user/dummy-image.jpg')}}"
                                                                                    alt="" class="avatar">
                                                                              <h4><a href="#">John Doe</a></h4>
                                                                              <div class="comment-metadata">
                                                                                    <a href="#">June 4, 2017 at 08:00
                                                                                          AM</a>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="comment-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                              adipiscing elit, sed do eiusmod tempor
                                                                              incididunt ut labore et dolore magna et
                                                                              sed aliqua. Ut enim ea commodo
                                                                              consequat...</p>
                                                                  </div>
                                                                  <div class="review">
                                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                                  </div>
                                                            </article>

                                                            <ol>
                                                                  <li>
                                                                        <article>
                                                                              <div class="comment-meta">
                                                                                    <div
                                                                                          class="comment-author-metadata">
                                                                                          <img src="{{ asset('/design/image/user/dummy-image.jpg')}}"
                                                                                                alt="" class="avatar">
                                                                                          <h4><a href="#">John Doe</a>
                                                                                          </h4>
                                                                                          <div class="comment-metadata">
                                                                                                <a href="#">June 4, 2017
                                                                                                      at 08:00 AM</a>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="comment-content">
                                                                                    <p>Lorem ipsum dolor sit amet,
                                                                                          consectetur adipiscing elit,
                                                                                          sed do eiusmod tempor
                                                                                          incididunt ut labore et dolore
                                                                                          magna et sed aliqua. Ut enim
                                                                                          ea commodo consequat...</p>
                                                                              </div>
                                                                              <div class="review">
                                                                                    <a href="#"
                                                                                          class="comment-reply-link">Reply</a>
                                                                              </div>
                                                                        </article>
                                                                  </li>
                                                            </ol>

                                                      </li>
                                                </ol>
                                          </li>
                                          <li>
                                                <article>
                                                      <div class="comment-meta">
                                                            <div class="comment-author-metadata">
                                                                  <img src="{{ asset('/design/image/user/dummy-image.jpg')}}" alt=""
                                                                        class="avatar">
                                                                  <h4><a href="#">John Doe</a></h4>
                                                                  <div class="comment-metadata">
                                                                        <a href="#">June 4, 2017 at 08:00 AM</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                  sed do eiusmod tempor incididunt ut labore et dolore
                                                                  magna et sed aliqua. Ut enim ea commodo consequat...
                                                            </p>
                                                      </div>
                                                      <div class="review">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                      </div>
                                                </article>
                                          </li>
                                    </ol>

                                    <div class="comment-respond">
                                          <h3 class="comment-reply-title">Post A Comment</h3>
                                          <form class="comment-form row">
                                                <div class="col col-sm-6">
                                                      <input type="text" class="form-control" placeholder="Enter Name*">
                                                </div>
                                                <div class="col col-sm-6">
                                                      <input type="email" class="form-control"
                                                            placeholder="Enter Email*">
                                                </div>
                                                <div class="col col-sm-12">
                                                      <input type="text" class="form-control"
                                                            placeholder="Enter Website*">
                                                </div>
                                                <div class="col col-sm-12">
                                                      <textarea class="form-control"
                                                            placeholder="Enter Your Comment*"></textarea>
                                                </div>
                                                <div class="col col-sm-12 text-center">
                                                      <button type="submit"
                                                            class="btn btn-default btn-style hvr-shutter-out-vertical">Comment</button>
                                                </div>
                                          </form>
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
                              <div class="widget categories-widget">
                                    <h3>Categories</h3>
                                    <ul>
                                          <li><a href="#">Apps Design</a></li>
                                          <li><a href="#">Photography</a></li>
                                          <li><a href="#">Creative Design</a></li>
                                          <li><a href="#">Developer</a></li>
                                          <li><a href="#">HTML &amp; CSS</a></li>
                                    </ul>
                              </div>
                              <div class="widget recent-posts-widget">
                                    <h3>Recent posts</h3>
                                    <div class="post">
                                          <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                          </h4>
                                          <span class="date">Aug 08, 2017</span>
                                    </div>
                                    <div class="post">
                                          <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                          </h4>
                                          <span class="date">Aug 08, 2017</span>
                                    </div>
                              </div>
                              <div class="widget tags-widget">
                                    <h3>Tags Clouds</h3>
                                    <div>
                                          <a href="#">Advisor</a>
                                          <a href="#">Consulting</a>
                                          <a href="#">Credit</a>
                                          <a href="#">Welth management</a>
                                          <a href="#">Finance</a>
                                          <a href="#">Advisor</a>
                                          <a href="#">Consulting</a>
                                          <a href="#">Credit</a>
                                    </div>
                              </div>
                              <div class="widget subscribe search-widget">
                                    <h3>Subscribe</h3>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing</p>
                                    <form class="form">
                                          <div>
                                                <input type="text" class="form-control"
                                                      placeholder="Enter your email here...">
                                                <button type="submit"><i class="fa fa-paper-plane"
                                                            aria-hidden="true"></i></button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div> <!-- end row -->
      </div> <!-- end container -->
</section>
<!-- end blog-details-post -->
@endsection