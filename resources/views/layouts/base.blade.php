<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title-std73') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/slicknav.css">
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/animate.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../css/themify-icons.css">
    <link rel="stylesheet" href="../../css/slick.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>


<body @yield('body-bg')>
<!--? Preloader Start -->
<!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="../../img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div> -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="../../img/logo/logo.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    @include('includes.main-menu')          
                    <!-- Header-btn -->
                    {{-- <div class="header-btns d-none d-lg-block f-right">
                    <a href="{{ route('contact') }}" class="btn header-btn">Связаться</a>
                    </div> --}}
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>

    @yield('slider-area')

    
     @yield('slider-area2')

    
    @yield('our-info')

    
    
    {{-- @if(Request::is('/')) --}}
        @yield('professional-services')
        @yield('brand-area')
    {{-- @endif --}}
    
    
    @yield('galery-area')
    
    
    @yield('contact-us')

    
    {{-- @if(Request::is('/') | Request::is('/about'))
        @include('includes.our-recent-news')
    @endif --}}
    



    @yield('contact-section')
</main>

@include('includes.footer')

<!-- Scroll Up -->
@include('includes.scroll-up')
{{-- <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div> --}}

@include('includes.jsplugins')

</body>
</html>