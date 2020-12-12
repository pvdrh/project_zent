@extends('frontend.layouts.master')

@section('home') 

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <div class="body__overlay"></div>
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height"">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Bộ Sưu Tập Giáng Sinh</h2>
                                        <h1>Merry Christmas</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Xem Ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="frontend/images/slider/2.jpg" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Bộ Sưu Tập 2020</h2>
                                        <h1>Autumn</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Xem Ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="frontend/images/slider/1.jpg" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Sản Phẩm Mới</h2>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
                            @for($i=0;$i<sizeof($products_new);$i+=2)
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="{{route('product.detail',$products_new[$i]->id)}}">
                                            <img src="storage/{{$products_new[$i]->avatar}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="{{route('product.detail',$products_new[$i]->id)}}"><i class="icon-heart icons"></i></a></li>
                                            <li><a href="{{route('product.detail',$products_new[$i]->id)}}"><i class="icon-handbag icons"></i></a></li>
                                            <li><a href="{{route('product.detail',$products_new[$i]->id)}}"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">{{$products_new[$i]->id}}</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">{{$products_new[$i]->origin_price}}</li>
                                            <li>{{$products_new[$i]->sale_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->
        <!-- Start Prize Good Area -->
        <section class="htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>Cải Tạo Không Gian</h2>
                            <h3>Theo phong cách tân cổ điển</h3>
                            <a class="fr__btn" href="#">Xem Ngay</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="frontend/images/banner/1.jpg" alt="banner images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Prize Good Area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Bài Viết</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ht__blog__wrap clearfix">
                        @for($i=0;$i<sizeof($posts);$i+=2)
                        <!-- Start Single Blog -->
                        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="storage/{{$posts[$i]->img}}" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span>{{$posts[$i]->created_at}}</span>
                                    </div>
                                    <h2><a href="blog-details.html">{{$posts[$i]->title}}</a></h2>
                                    <p>{!!$posts[$i]->content!!}</p>
                                    <div class="blog__btn">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Banner Area -->
    </div>
    <!-- Body main wrapper end -->
@endsection