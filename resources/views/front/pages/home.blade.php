@extends('front.layout.master')

@section('title') - {{ __('menu.home') }} @endsection

@section('css')

@endsection

@section('content')
<main class="main" >
    <div class="mt-div"></div>
    <!-- HOME SECTION ==================================== -->
    <section class="homer-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 text "  >
                    <div class="content">
                        <h2 class="wow animate__animated animate__fadeInLeft animate__slow" data-wow-delay=".3s">{!! \App\Helpers\Options::getOption('home_banner_text_'.app()->getLocale()) !!}</h2>
                        <div class="upvideo wow animate__animated animate__fadeInLeft animate__slow" data-wow-delay=".5s"><a href="#0"><i class="fa-solid fa-play"></i><span>{!! \App\Helpers\Options::getOption('home_banner_button_text_'.app()->getLocale()) !!}</span></a></div>
                    </div>
                </div>
                <div class="col-lg-7 picture wow animate__animated animate__fadeInRight animate__slow" data-wow-delay=".3s">
                    <div class="imag">
                        <img src="{{ asset('files/home-banner/'.\App\Helpers\Options::getOption('home_banner_src')) }}" alt="">
                    </div>
                    <div class="video upvideo"><a href="{!! \App\Helpers\Options::getOption('home_banner_link') !!}"><i class="fa-solid fa-play"></i><span>{!! \App\Helpers\Options::getOption('home_banner_button_text_'.app()->getLocale()) !!}</span></a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS ==================================== -->
    <section class="work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 left wow animate__animated animate__zoomIn animate__slow" data-wow-delay=".3s">
                    <h2>YENİ LAYİHƏLƏR</span>
                </div>
                <div class="col-lg-4 col-md-6 box  wow animate__animated animate__fadeInUp animate__slow" data-wow-delay=".3s"  onclick="openpage('work-detail.html')">
                    <div class="image">
                        <img src="{{ asset('a-n') }}/img/global/work/work1.png" alt="">
                        <div class="content fadeIn-bottom">
                            <h2>Ugh with the Old, in with the New</h2>
                        </div>
                    </div>
                    <div class="content-overlay"></div>
                </div>
                <div class="col-lg-4 col-md-6 box wow animate__animated animate__fadeInUp animate__slow" data-wow-delay=".5s"  onclick="openpage('work-detail.html')">
                    <div class="image">
                        <img src="{{ asset('a-n') }}/img/global/work/work2.png" alt="">
                        <div class="content fadeIn-bottom">
                            <h2>Ugh with the Old, in with the New</h2>
                        </div>
                    </div>
                    <div class="content-overlay"></div>
                </div>
                <div class="col-lg-2 right wow animate__animated animate__zoomIn animate__slow" data-wow-delay=".3s" onclick="openpage('work.html')">
                    <h2 >Digər Layİhələr</h2>
                    <div class="right-btn">
                        <button type="button" class="btn btn-next">
                            <img src="{{ asset('a-n') }}/img/global/news/arrow-right.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT ==================================== -->
    <section class="about">
        @include('front.includes.strategiya')
    </section>

    <!-- PARTNERS ==================================== -->
    <section class="partners mb-5">
        <div class="container">
            <div class="row">
                <div class="partners_all col-xs-12 col-lg-12 col-md-12"  data-aos="zoom-in" data-aos-duration="1000">
                    <div class="content">
                        <h2>partnyorlar</h2>
                        <span>Onlar kimi sizin üçün də ağıllı həllər təklif edə bilərik.</span>
                    </div>
                    <div class="carousels">
                        <div class="carousel-left ">
                            <div class="items owl-carousel owl-js">

                                <div class="item">
                                    <div class="inside_item">
                                        <div >
                                            <img  src="img/global/partners/mitsubishi.png" alt="Some Moments">
                                        </div>
                                        <div >
                                            <img src="{{ asset('a-n') }}/img/global/partners/google.png" alt="Some Moments">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inside_item">
                                        <div >
                                            <img src="{{ asset('a-n') }}/img/global/partners/mitsubishi.png" alt="Some Moments">
                                        </div>
                                        <div >
                                            <img src="{{ asset('a-n') }}/img/global/partners/google.png" alt="Some Moments">
                                        </div>
                                    </div>
                                </div>

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
                    <div class="logo_team wow"  data-aos="fade-right" data-aos-duration="1200" data-wow-delay=".6s">
                        <div class="image" >
                            <img class="desktop" src="img/global/partners/at.png" alt="">
                            <img class="mobile" src="img/global/partners/atplus.png" alt="">
                        </div>
                        <span>1st sit amet, consectetur adipiscing elit. Aliquam tempus ac.</span>
                    </div>
                    <div class="title wow" data-aos="fade-left" data-aos-duration="1200" data-wow-delay=".6s">
                        <h2>komanda</h2>
                    </div>
                </div>

                <div class="team_right owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="item" data-aos="zoom-in" data-aos-duration="1000" >
                        <img src="{{ asset('a-n') }}/img/global/team/team_banner.png" alt="">
                    </div>
                    <div class="item " data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('a-n') }}/img/global/team/team_banner.png" alt="">
                    </div>
                    <div class="item " data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('a-n') }}/img/global/team/team_banner.png" alt="">
                    </div>
                    <div class="item " data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('a-n') }}/img/global/team/team_banner.png" alt="">
                    </div>
                    <div class="item " data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('a-n') }}/img/global/team/team_banner.png" alt="">
                    </div>
                    <div class="item" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('a-n') }}/img/global/team/team_banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS ==================================== -->
    <section class="news">
        <div class="container-fluid">
            <div class="title wow"  data-aos="fade-right" data-aos-duration="1200" data-wow-delay=".4s">YENİ</div>
            <div class="row">
                <div class="col-lg-2 left" data-aos="zoom-in" data-aos-duration="1200" data-wow-delay=".4s">
                    <h2>ƏSAS YENİLİKLƏR</span>
                </div>
                <div class="col-lg-4 col-md-6 box  wow animate__animated animate__fadeInUp animate__slow" data-wow-delay=".3s" onclick="openpage('news-detail.html')" >
                    <div class="image">
                        <img src="{{ asset('a-n') }}/img/global/news/news1.png" alt="">
                        <div class="content">
                            <h2>Reamon del teromsaw</h2>
                            <span>Today 20:34</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 box wow animate__animated animate__fadeInUp animate__slow" data-wow-delay=".5s" onclick="openpage('news-detail.html')" >
                    <div class="image">
                        <img src="{{ asset('a-n') }}/img/global/news/news2.png" alt="">
                        <div class="content">
                            <h2>Warona somena desozien goen</h2>
                            <span>Today 20:34</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 right" onclick="openpage('news.html')" data-aos="fade-left" data-aos-duration="1200" data-wow-delay=".4s">
                    <h2>Dİgər xəbərlər</h2>
                    <div class="right-btn">
                        <button type="button" class="btn btn-next">
                            <img src="{{ asset('a-n') }}/img/global/news/arrow-right.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


@section('js')

@endsection
