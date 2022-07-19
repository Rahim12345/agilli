<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('a-n/css/plugins/swiper-bundle.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('a-n/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('css')
</head>

<body >



{{--<div class="preloader">--}}
{{--    <div class="preloader__container">--}}
{{--            <h1 class="preloader__container__percent"></h1>--}}
{{--        <div class="preloader__container__preload">--}}
{{--        <div class="preloader__container__preload__dot">         </div>--}}
{{--        <div class="preloader__container__preload__dot">         </div>--}}
{{--        <div class="preloader__container__preload__dot">         </div>--}}
{{--        <div class="preloader__container__preload__dot">         </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




<!-- HEADER ==================================== -->
<header>
    <div class="container-fluid">
        <div class="row">
            <nav>
                <div class="header-left"  onclick="openpage('{!! route('front.home') !!}')">
                    <div class="logo">
                        <a href="#0"><img src="{{ asset('a-n') }}/img/header/logo.png" alt=""></a>
                    </div>
                    <div class="header-left-text">
                        <span>{!! __('menu.top_text') !!}</span>
                    </div>
                </div>
                <div class="header-right">
                    <button class="nav-mobile-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <div id="nav-mobile-bar-top" class="nav-mobile-bar"></div>
                        <div id="nav-mobile-bar-middle" class="nav-mobile-bar"></div>
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li><a href="{!! route('front.home') !!}" class="active">{{ __('menu.home') }}</a></li>
                                        <li><a href="{!! route('front.about') !!}">{{ __('menu.about') }}</a></li>
                                        <li><a href="{!! route('front.works') !!}">{{ __('menu.works') }}</a></li>
                                        <li><a href="{!! route('front.news') !!}">{{ __('menu.news') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
