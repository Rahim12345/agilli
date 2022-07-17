@extends('front.layout.master')

@section('title') - {{ __('menu.works') }} @endsection

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="mt-div"></div>
    <!-- BANNER ==================================== -->
    <section class="banner">
        <img src="{{ asset('files/project-banner/'.\App\Helpers\Options::getOption('project_banner_src')) }}" class="d-none" alt="">
        <div class="container-fluid">
            <div class="row">
                <div class="image">
                    <div class="videolink">
                        <i class="fa-solid fa-play"></i>
                        <span><a href="{!! \App\Helpers\Options::getOption('about_banner_link') !!}">{!! \App\Helpers\Options::getOption('project_banner_button_text_'.app()->getLocale()) !!}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WORKS ==================================== -->
    <section class="works">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-lg-2 col-md-12 col-sm-12">
                    <div class="menu">
                        <div class="works-button">
                            <button class="filter__item __js_filter-btn filter__item--active" type="button" data-filter="*">ALL</button>
                            <button class="filter__item __js_filter-btn" type="button" data-filter=".__js_socialopenpage">Social openpage</button>
                            <button class="filter__item __js_filter-btn" type="button" data-filter=".__js_tvc">TVC</button>
                            <button class="filter__item __js_filter-btn" type="button" data-filter=".__js_print">Print</button>
                            <button class="filter__item __js_filter-btn" type="button" data-filter=".__js_digital">Digital</button>
                        </div>
                    </div>
                </div>
                <div class="portfolio_gallery tab col-xs-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="__js_projects-grid ">
                        <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_socialopenpage" onclick="openpage('work.html')" >
                            <div class="image">
                                <img src="img/works/works1.png">
                            </div>
                        </div>
                        <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_tvc">
                            <div class="image">
                                <img src="img/works/works2.png">
                            </div>
                        </div>
                        <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_print">
                            <div class="image">
                                <img src="img/works/works3.png">
                            </div>
                        </div>
                        <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_socialopenpage">
                            <div class="image">
                                <img src="img/works/works4.png">
                            </div>
                        </div>
                        <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_digital">
                            <div class="image">
                                <img src="img/works/works5.png">
                            </div>
                        </div>
                        <div class="box col-xl-6 col-lg-6 col-md-6 col-sm-6 __js_masonry-item __js_tvc">
                            <div class="image">
                                <img src="img/works/works6.png">
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="javascript:(0)">LOAD MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection


@section('js')

@endsection
