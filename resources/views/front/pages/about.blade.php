@extends('front.layout.master')

@section('title') - {{ __('menu.about') }} @endsection

@section('meta')
    <meta name="title" content="{{ \App\Helpers\Metador::getMeta($key.'name_title_'.app()->getLocale()) }}">
    <meta name="description" content="{{ \App\Helpers\Metador::getMeta($key.'name_description_'.app()->getLocale()) }}">
    <meta property="og:site_name" content="{{ \App\Helpers\Metador::getMeta($key.'property_og_site_name_'.app()->getLocale()) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ \App\Helpers\Metador::getMeta($key.'property_og_url_'.app()->getLocale()) }}">
    <meta property="og:title" content="{{ \App\Helpers\Metador::getMeta($key.'property_og_title_'.app()->getLocale()) }}">
    <meta property="og:description" content="{{ \App\Helpers\Metador::getMeta($key.'property_twitter_description_'.app()->getLocale()) }}">
    <meta property="twitter:url" content="{{ \App\Helpers\Metador::getMeta($key.'property_og_url_'.app()->getLocale()) }}">
    <meta property="twitter:title" content="{{ \App\Helpers\Metador::getMeta($key.'property_og_title_'.app()->getLocale()) }}">
    <meta property="twitter:description" content="{{ \App\Helpers\Metador::getMeta($key.'property_og_description_'.app()->getLocale()) }}">
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
            @include('front.includes.partnyors')
        </section>

        <!-- TEAM ==================================== -->
        <section class="team">
            @include('front.includes.team')
        </section>

        <!-- NEWS ==================================== -->
        <section class="news">
        <div class="container-fluid">
            <div class="title">YENİ</div>
            <div class="row">
                <div class="col-lg-2 left" data-aos="zoom-in" data-aos-duration="1200" data-wow-delay=".4s">
                    <h2>{{ __('menu.main_news') }}<h2>
                </div>
                @foreach($last_news as $last_new)
                    <div class="col-lg-4 col-md-6 box  wow animate__animated animate__fadeInUp animate__slow" data-wow-delay=".3s" onclick="openpage('{!! route('front.news.single',['id'=>$last_new->id]) !!}')" >
                        <div class="image">
                            <img src="{{ asset('files/news-banner/'.$last_new->cover) }}" alt="">
                            <div class="content">
                                <h2>{{ $last_new->{'title_'.app()->getLocale()} }}</h2>
                                <span>{{ $last_new->{'release_date_'.app()->getLocale()} }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if($next_news)
                    <div class="col-lg-2 right" onclick="openpage('{!! route('front.news.single',['id'=>$next_news->id]) !!}')" data-aos="fade-left" data-aos-duration="1200" data-wow-delay=".4s">
                        <h2>Dİgər xəbərlər</h2>
                        <div class="right-btn">
                            <button type="button" class="btn btn-next">
                                <img src="{{ asset('a-n/img/global/news/arrow-right.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        </section>
    </div>
</main>
@endsection


@section('js')

@endsection
