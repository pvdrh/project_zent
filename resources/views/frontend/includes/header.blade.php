<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                        <div class="logo">
                             <a href="{{route('home')}}"><img src="/frontend/images/logo/4.png" alt="logo images"></a>
                        </div>      
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="#">Khuyến Mãi</a>
                                </li>
                                <li class="drop"><a href="#">Đồ Nội Thất</a>
                                    <ul class="dropdown mega_dropdown">
                                        @foreach($categories_menu as $category)
                                            @if($category->parent_id ==11)
                                            @php
                                               $parent_id = $category->id 
                                            @endphp
                                            <li><a class="mega__title" href="{{route('category')}}">{{$category->name}}</a>
                                                <ul class="mega__item">
                                                    @foreach ($categories_menu as $value)
                                                        @if($value->parent_id == $parent_id)
                                                            <li><a href="{{route('category')}}">{{$value->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                
                                                </ul>
                                            </li>
                                            @endif
                                        @endforeach
                                        <!-- Start Single Mega MEnu -->
                                        
            
                                        <!-- End Single Mega MEnu -->
                                    </ul>
                                </li>
                                <li class="drop"><a href="#">Đồ Trang Trí</a>
                                    <ul class="dropdown mega_dropdown">
                                        @foreach($categories_menu as $category)
                                            @if($category->parent_id ==12)
                                            @php
                                               $parent_id = $category->id 
                                            @endphp
                                            <li><a class="mega__title" href="#">{{$category->name}}</a>
                                                <ul class="mega__item">
                                                    @foreach ($categories_menu as $value)
                                                        @if($value->parent_id == $parent_id)
                                                            <li><a href="">{{$value->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                
                                                </ul>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="drop"><a href="{{route('blog.index')}}">Bài Viết</a>
                                </li>
                                <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                            </ul>
                        </nav>

                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="cart.html">Cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="product-grid.html">product grid</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>  
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                            
                            
                            <div class="htc__shopping__cart">
                                <a href="{{route('cart.index')}}"><i class="icon-handbag icons"></i></a>
                            </div>

                            @auth
                            <form style="margin:10px" class="row" action="{{route('logout')}}" method="post">
                                @csrf
                                
                                <button type="submit" class="btn btn-outline-primary">Đăng Xuất</button>
                            </form>
                            @else
                            <form class="row" style="margin:10px">
                            <a href="{{route('form')}}">Đăng nhập</a>
                        </form>
                            @endauth
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>