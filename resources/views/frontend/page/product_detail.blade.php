@extends('frontend.layouts.master')

@section('home')

 <!-- Start Bradcaump area -->
 <div class="ht__bradcaump__area" style="background: rgb(212,147,180);
 background: -moz-radial-gradient(circle, rgba(212,147,180,1) 26%, rgba(255,89,123,1) 100%);
 background: -webkit-radial-gradient(circle, rgba(212,147,180,1) 26%, rgba(255,89,123,1) 100%);
 background: radial-gradient(circle, rgba(212,147,180,1) 26%, rgba(255,89,123,1) 100%);
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#d493b4",endColorstr="#ff597b",GradientType=1);">
    <div class="ht__bradcaump__wrap"    >
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item" href="{{route('home')}}">Trang Chủ</a>
                          <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                          <a class="breadcrumb-item" href="{{route('category')}}">Sản Phẩm</a>
                          <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                          <span class="breadcrumb-item active">{{$product_detail->model}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
          <!-- Start Product Details Area -->
          @for($i=0;$i<1;$i++)
          <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img src="{{asset('storage/'. $product_detail->avatar)}}" alt="full-image">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2>{{$product_detail->name}}</h2>
                                <h6>Nhãn Hiệu: <span>{{$product_detail->model}}</span></h6>
                                <ul class="rating">
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                </ul>
                                <ul  class="pro__prize">
                                    <li>{{number_format($product_detail->sale_price)}} đ</li>
                                </ul>
                                <div class="ht__pro__desc">
                                    <div class="sin__desc">
                                        @if($product_detail->status == 1)
                                        <p><span>Tình Trạng:</span>
                                            Còn Hàng
                                        </p>
                                        @endif
                                        @if($product_detail->status == 2)
                                        <p><span>Tình Trạng:</span>
                                            Hết Hàng
                                        </p>
                                    @endif
                                    <form class="" action="{{route('cart.add',$product_detail->id)}}" method="post">
                                        @csrf
                                        <div class="sin__desc align--left">
                                            <p><span>Số Lượng</span></p>
                                            <select name="quantity" class="select__size">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="sin__desc align--left">
                                            <button type="submit" class="btn btn-outline-success">Thêm Vào Giỏ Hàng</button>
                                        </div>
                                        
                                    </form>


                                    <div class="sin__desc product__share__link">
                                        <p><span>Chia Sẻ:</span></p>
                                        <ul class="pro__share">
                                            <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area -->
        <!-- Start Product Description -->
        <section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View -->
                        <ul class="pro__details__tab" role="tablist">
                            <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">Mô Tả</a></li>
                            <li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">Đánh Giá</a></li>
                            <li role="presentation" class="shipping"><a href="#shipping" role="tab" data-toggle="tab">Giao Hàng</a></li>
                        </ul>
                        <!-- End List And Grid View -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                                <div class="pro__tab__content__inner">
                                    <p class="pro__info">{!!$product_detail->content!!}</p>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                                <div class="pro__tab__content__inner">
                                   <p>Đang cập nhật...</p>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                                <div class="pro__tab__content__inner">
                                  <p> 300k trên mỗi đơn hàng chưa bao gồm phí lắp đặt </p>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Description -->
        @endfor
@endsection