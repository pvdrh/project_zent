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
                              <a class="breadcrumb-item" href="{{route('home')}}">Trang Chủ</a>
                              <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                              <span class="breadcrumb-item active">Thanh Toán</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="checkout-wrap ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout__inner">
                        <div class="accordion-list">
                            <div class="accordion">
                            <b>Thông Tin Thanh Toán</b>
                                <div class="accordion__body">
                                    <div class="bilinfo">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input name="name" type="text" placeholder="Họ Và Tên">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <input name="address" type="text" placeholder="Địa Chỉ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input name="email" type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input name="sdt" type="text" placeholder="Số Điện Thoại">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <ul class="payment__btn">
                                    <li class="active"><a href="{{route('checkout.store')}}">Gửi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="order-details">
                        <h5 class="order-details__title">Đơn Hàng Của Bạn</h5>
                        <div class="order-details__item">
                            <div class="single-item">
                                <div class="single-item__thumb">
                                    <img src="images/cart/1.png" alt="ordered item">
                                </div>
                                <div class="single-item__content">
                                    <a href="#">Santa fe jacket for men</a>
                                    <span class="price">$128</span>
                                </div>
                                <div class="single-item__remove">
                                    <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="order-details__count">
                            <div class="order-details__count__single">
                                <h5>Thành Tiền</h5>
                                <span class="price">$909.00</span>
                            </div>
                            <div class="order-details__count__single">
                                <h5>Phí Giao Hàng</h5>
                                <span class="price">0</span>
                            </div>
                        </div>
                        <div class="ordre-details__total">
                            <h5>Tộng</h5>
                            <span class="price">$918.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
@endsection