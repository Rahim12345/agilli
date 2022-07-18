@extends('front.layout.master')

@section('title')
    - {{ __('menu.news') }}
@endsection

@section('css')
@endsection

@section('content')
    <main class="main">
        <!-- WORK BANNER ==================================== -->
        <section class="work_banner">
            <div class="work-banner-inner">
                <div class="bg" style="background: url('{!! asset('files/news-banner/'.$news->cover) !!}');"></div>
            </div>
        </section>

        <!-- NEWS CONTENT ==================================== -->
        <section class="news-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="news-padding">
                        <div class="news-inner">
                            <div class="col-lg-6">
                                <div class="content-top ">
                                    <h2>{!! $news->{'title_'.app()->getLocale()} !!}</h2>
                                    <span>{!! $news->{'author_'.app()->getLocale()} !!}</span>
                                    <span>{!! $news->{'release_date_'.app()->getLocale()} !!}</span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="content-top">
                                    {!! $news->{'text_1_'.app()->getLocale()} !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="image">
                                <img src="{!! asset('files/news-images/'.$news->image_1) !!}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="content-bottom">
                                {!! $news->{'text_2_'.app()->getLocale()} !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 p-0">
                        <div class="image-banner">
                            <img src="{!! asset('files/news-images/'.$news->image_2) !!}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="news_detail_author">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 information">
                        <div class="col-lg-3 date">
                            <span class="bold">Release date: </span>
                            <span>{!! $news->{'release_date_'.app()->getLocale()} !!} </span>
                        </div>
                        <div class="col-lg-3 author">
                            <span class="bold">Release date:</span>
                            <span>{!! $news->{'author_'.app()->getLocale()} !!}</span>
                        </div>
                        <div class="col-lg-6 share">
                            <span class="bold">Share on: </span>
                            <ul>
                                <li><a href="#0">Facebook</a></li>
                                <li><a href="#0">Twitter</a> </li>
                                <li><a href="#0">Pinterest</a> </li>
                                <li><a href="#0">Linkedin</a> </li>
                                <li><a href="#0">Copy Link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news details">
            <div class="container-fluid">
                <div class="row">
                    @if($previous)
                    <div class="col-lg-2 left">
                        <h2>Əvvəlki xəbər</h2>
                        <div class="right-btn">
                            <button type="button" class="btn btn-next" onclick="openpage('{!! route('front.news.single',['id'=>$previous->id]) !!}')">
                                <img src="{{ asset('a-n/img/global/news/arrow-left.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 box">
                        <div class="image">
                            <img src="{!! asset('files/news-banner/'.$previous->cover) !!}" alt="">
                            <div class="content">
                                <h3>{!! $news->{'title_'.app()->getLocale()} !!}</h3>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>

    </main>
@endsection


@section('js')

@endsection
