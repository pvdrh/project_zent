@extends('frontend.layouts.master')

@section('home')
      <!-- Start Bradcaump area -->
      <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(frontend/images/banner/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                              <a class="breadcrumb-item" href="index.html">Trang Chủ</a>
                              <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                              <span class="breadcrumb-item active">Bài Viết</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Blog Area -->
    <section class="htc__blog__area bg__white ptb--100">
        <div class="container">
            <div class="row">
                <div class="ht__blog__wrap blog--page clearfix">
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/blog-img/1.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <div class="bl__date">
                                    <span>March 22, 2016</span>
                                </div>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog__btn">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/blog-img/2.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <div class="bl__date">
                                    <span>May 22, 2017</span>
                                </div>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog__btn">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/blog-img/3.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <div class="bl__date">
                                    <span>March 22, 2018</span>
                                </div>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog__btn">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
            <!-- Start PAgenation -->
            <div class="row">
                <div class="col-xs-12">
                    <ul class="htc__pagenation">
                       <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li> 
                       <li><a href="#">1</a></li> 
                       <li><a href="#">2</a></li> 
                       <li><a href="#">3</a></li> 
                       <li><a href="#">4</a></li> 
                       <li><a href="#"><i class="zmdi zmdi-more"></i></a></li> 
                       <li><a href="#">19</a></li> 
                       <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li> 
                    </ul>
                </div>
            </div>
            <!-- End PAgenation -->
        </div>
    </section>
    <!-- End Blog Area -->
@endsection