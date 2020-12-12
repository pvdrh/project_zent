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
                            @foreach ($items as $item)
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="images/product-2/cart-img/1.jpg" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">{{$item->name}}</a>
                                    </td>
                                    <td class="product-price"><span class="amount">{{number_format($item->price)}} đ</span></td>
                                    <td class="product-quantity"><input type="number" value="{{$item->qty}}" /></td>
                                    <td class="product-subtotal">{{number_format($item->price * $item->qty)}} đ</td>
                                    <td>
                                        <form action="{{route('cart.delete',$item->rowId)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Xoá
                                            </button>
                                        </form>
                                    </td>
                                  
                            </tbody>
                            @endforeach
                        </table>
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
                                        <li>Phí Giao Hàng</li>
                                    </ul>
                                    <ul class="cart__price">
                                        <li>{{Cart::total()}} đ</li>
                                        <li>0</li>
                                    </ul>
                                </div>
                                <div class="cart__total">
                                    <span>Tổng Đơn Hàng</span>
                                    <span>{{Cart::total()}} đ</span>
                                </div>
                                <ul class="payment__btn">
                                    <li class="active"><a href="#">Thanh Toán</a></li>
                                    <li><a href="{{route('home')}}">Tiếp Tục Mua Sắm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
@endsection