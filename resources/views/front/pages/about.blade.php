@extends('front.layout.master')

@section('title') - {{ __('menu.about') }} @endsection

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="mt-div"></div>
     <!-- ABOUT ==================================== -->
     <div class="main-1">
        <section class="banner">
            <img src="{{ asset('files/about-banner/'.\App\Helpers\Options::getOption('about_banner_src')) }}" class="d-none" alt="">
            <div class="container-fluid s-hero__background">
                <div class="row">
                    <div class="image">
                        <div class="videolink">
                            <i class="fa-solid fa-play"></i>
                            <span><a href="{!! \App\Helpers\Options::getOption('about_banner_link') !!}">{!! \App\Helpers\Options::getOption('home_banner_button_text_'.app()->getLocale()) !!}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     </div>
    <div class="main2">
        <section class="about">
            @include('front.includes.strategiya')
        </section>

        <!-- PARTNERS ==================================== -->
        <section class="partners mb-5">
            <div class="container">
                <div class="row">
                    <div class="partners_all col-xs-10 col-lg-10 col-md-12 ">
                        <div class="content">
                            <h2>partnyorlar</h2>
                            <span>Onlar kimi sizin üçün də ağıllı həllər təklif edə bilərik.</span>
                        </div>
                        <div class="carousels">
                            <div class="carousel-left ">
                                <div class="swiper-container _js_carosuel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide slide-img">
                                            <img class="img-fluid" src="img/global/partners/partners-all.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="img/global/partners/partners-all.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-right ">
                                <h2>Dİgər partNyorlar</h2>
                                <div class="right-btn">
                                    <button type="button" class="btn btn-next">
                                        <img src="img/global/team/pink-arrow.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TEAM ==================================== -->
        <section class="team">
            <div class="container-fluid">
                <div class="row">
                    <div class="team_left ">
                        <div class="logo_team">
                            <div class="image">
                                <img src="img/global/team/team_logo.png" alt="">
                            </div>
                            <span>1st sit amet, consectetur adipiscing elit. Aliquam tempus ac.</span>
                        </div>
                        <div class="title">
                            <h2>komanda</h2>
                        </div>
                    </div>

                    <div class="team_right owl-carousel owl-theme">
                        <div class="item"><img src="img/global/team/team_banner.png" alt=""></div>
                        <div class="item"><img src="img/global/team/team_banner.png" alt=""></div>
                        <div class="item"><img src="img/global/team/team_banner.png" alt=""></div>
                        <div class="item"><img src="img/global/team/team_banner.png" alt=""></div>
                        <div class="item"><img src="img/global/team/team_banner.png" alt=""></div>
                        <div class="item"><img src="img/global/team/team_banner.png" alt=""></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS ==================================== -->
        <section class="news">
        <div class="container-fluid">
            <div class="title">YENİ</div>
            <div class="row">
                <div class="col-lg-2 left">
                    <h2>ƏSAS YENİLİKLƏR</span>
                </div>
                <div class="col-lg-4 box">
                    <div class="image">
                        <img src="img/global/news/news1.png" alt="">
                        <div class="content">
                            <h2>Reamon del teromsaw</h2>
                            <span>Today 20:34</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 box">
                    <div class="image">
                        <img src="img/global/news/news2.png" alt="">
                        <div class="content">
                            <h2>Warona somena desozien goen</h2>
                            <span>Today 20:34</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 right">
                    <h2>Dİgər xəbərlər</h2>
                    <div class="right-btn">
                        <button type="button" class="btn btn-next">
                            <img src="img/global/news/arrow-right.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</main>
@endsection


@section('js')

@endsection
