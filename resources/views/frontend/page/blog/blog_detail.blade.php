@extends('frontend.layouts.master')

@section('home')
     <!-- Start Bradcaump area -->
     <div class="ht__bradcaump__area" style="background: rgb(212,147,180);
     background: -moz-radial-gradient(circle, rgba(212,147,180,1) 26%, rgba(255,89,123,1) 100%);
     background: -webkit-radial-gradient(circle, rgba(212,147,180,1) 26%, rgba(255,89,123,1) 100%);
     background: radial-gradient(circle, rgba(212,147,180,1) 26%, rgba(255,89,123,1) 100%);
     filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#d493b4",endColorstr="#ff597b",GradientType=1);">
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
    <!-- Start Blog Details Area -->
    <section class="htc__blog__details bg__white ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="htc__blog__details__wrap">
                        <div class="ht__bl__thumb">
                            <img src="images/blog/big-images/1.jpg" alt="blog images">
                        </div>
                        <div class="bl__dtl">
                            <p>{!!$post->content!!}</p>
                        </div>
                        <!-- End Comment Area -->
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection