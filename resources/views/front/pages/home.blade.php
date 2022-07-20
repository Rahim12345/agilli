@extends('front.layout.master')

@section('title') - {{ __('menu.home') }} @endsection

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
                        <img src="{{ asset('files/home-banner/'.\App\Helpers\Options::getOption('home_banner_src')) }}" alt="{{ \App\Helpers\Options::getOption('home_banner_src_alt_'.app()->getLocale()) }}">
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
                    <h2>{!! __('menu.yeni_layiheler') !!}</h2>
                </div>
                @foreach($last_projects as $last_project)
                <div class="col-lg-4 col-md-6 box  wow animate__animated animate__fadeInUp animate__slow" data-wow-delay=".3s"  onclick="openpage('{!! route('front.works.single',['id'=>$last_project->id,'slug'=>$last_project->{'slug_'.app()->getLocale()}]) !!}')">
                    <div class="image">
                        <img src="{{ asset('files/project-banner/'.$last_project->cover) }}" alt="{{ $last_project->{'alt_'.app()->getLocale()} }}">
                        <div class="content fadeIn-bottom">
                            <h2>{!! $last_project->{'title_1_'.app()->getLocale()} !!}</h2>
                        </div>
                    </div>
                    <div class="content-overlay"></div>
                </div>
                @endforeach
                <div class="col-lg-2 right wow animate__animated animate__zoomIn animate__slow" data-wow-delay=".3s" onclick="openpage('{!! route('front.works') !!}')">
                    <h2 >{{ __('menu.diger_layiheler') }}</h2>
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
