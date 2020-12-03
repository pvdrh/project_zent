<!doctype html>
<html class="no-js" lang="en">
@include('frontend.includes.head')

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        @include('frontend.includes.header')
        <!-- End Header Area -->

        @yield('home')
        @include('frontend.includes.footer')
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

 @include('frontend.includes.script')

</body>

</html>