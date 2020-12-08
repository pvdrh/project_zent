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
                          <span class="breadcrumb-item active">Giỏ Hàng</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="#">               
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Sản Phẩm</th>
                                    <th class="product-name">Tên Sản Phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số Lượng</th>
                                    <th class="product-subtotal">Tổng</th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="images/product-2/cart-img/1.jpg" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">New Dress For Sunday</a>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </td>
                                    <td class="product-price"><span class="amount">£165.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1" /></td>
                                    <td class="product-subtotal">£165.00</td>
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="images/product-2/cart-img/2.jpg" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">New Dress For Sunday</a>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </td>
                                    <td class="product-price"><span class="amount">£50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1" /></td>
                                    <td class="product-subtotal">£50.00</td>
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="images/product-2/cart-img/3.jpg" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">New Dress For Sunday</a>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </td>
                                    <td class="product-price"><span class="amount">£50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1" /></td>
                                    <td class="product-subtotal">£50.00</td>
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="images/product-2/cart-img/4.jpg" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">New Dress For Sunday</a>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </td>
                                    <td class="product-price"><span class="amount">£50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1" /></td>
                                    <td class="product-subtotal">£50.00</td>
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="buttons-cart--inner">
                                <div class="buttons-cart">
                                    <a href="#">Tiếp Tục Mua Sắm</a>
                                </div>
                                <div class="buttons-cart checkout--btn">
                                    <a href="#">Cập Nhật</a>
                                    <a href="#">Thanh Toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="ht__coupon__code">
                                <span>Nhập Mã Giảm Giá</span>
                                <div class="coupon__box">
                                    <input type="text" placeholder="">
                                    <div class="ht__cp__btn">
                                        <a href="#">Gửi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="htc__cart__total">
                                <h6>Thanh Toán</h6>
                                <div class="cart__desk__list">
                                    <ul class="cart__desc">
                                        <li>Thành Tiền</li>
                                        <li>Thuế</li>
                                        <li>Phí Giao Hàng</li>
                                    </ul>
                                    <ul class="cart__price">
                                        <li>$909.00</li>
                                        <li>$9.00</li>
                                        <li>0</li>
                                    </ul>
                                </div>
                                <div class="cart__total">
                                    <span>Tổng Đơn Hàng</span>
                                    <span>$918.00</span>
                                </div>
                                <ul class="payment__btn">
                                    <li class="active"><a href="#">Thanh Toán</a></li>
                                    <li><a href="#">Tiếp Tục Mua Sắm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
@endsection