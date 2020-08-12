@extends('layouts.base')

@section('title-std73') Интерьеры в Краснодаре @endsection


@section('body-bg')
    class="body-bg"
@endsection

@section('slider-area')
    @include('includes.slider-area')
@section('our-info')

@include('includes.our-info')

@section('professional-services')
    @include('includes.professional-services')
@endsection

@section('brand-area')
<!-- Brand Area Start -->
    <div class="brand-area pt-120 pb-120">
        <div class="container">
            <div class="brand-active brand-border pt-50 pb-40">
                <div class="single-brand">
                    <img src="../../img/gallery/brand1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="../../img/gallery/brand2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="../../img/gallery/brand3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="../../img/gallery/brand4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="../../img/gallery/brand2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="../../img/gallery/brand5.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
@endsection

@section('galery-area')
<!--? Gallery Area Start -->
    <!-- <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(../../img/gallery/gallery1.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><span>Intorior</span>Burj Khalifa</h3>
                                <a href="work.html"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(../../img/gallery/gallery2.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><span>Intorior</span>Burj Khalifa</h3>
                                <a href="work.html"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                            <div class="gallery-img" style="background-image: url(../../img/gallery/gallery3.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><span>Intorior</span>Burj Khalifa</h3>
                                <a href="work.html"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(../../img/gallery/gallery4.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><span>Intorior</span>Burj Khalifa</h3>
                                <a href="work.html"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(../../img/gallery/gallery5.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><span>Intorior</span>Burj Khalifa</h3>
                                <a href="work.html"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url(../../img/gallery/gallery6.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><span>Intorior</span>Burj Khalifa</h3>
                                <a href="work.html"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Gallery Area End -->
@endsection
@section('contact-us')
    @include('includes.contact-us')
@endsection