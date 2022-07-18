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
        @include('front.includes.partnyors')
    </section>

    <!-- TEAM ==================================== -->
    <section class="team">
        @include('front.includes.team')
    </section>

    <!-- NEWS ==================================== -->
    <section class="news">
        @include('front.includes.last_news')
    </section>
</main>
@endsection


@section('js')

@endsection
