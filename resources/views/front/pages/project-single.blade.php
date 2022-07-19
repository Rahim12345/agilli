@extends('front.layout.master')

@section('title')
    - {{ __('menu.works') }}
@endsection

@section('css')
@endsection

@section('content')
    <main class="main">
        <!-- WORK BANNER ==================================== -->
        <section class="work_banner">
            <div class="work-banner-inner">
                <div class="bg" style="background: url('{!! asset('files/project-banner/'.$project->cover) !!}');"></div>
            </div>
        </section>

        <!-- WORK TEXT ==================================== -->
        <section class="work_text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 top">
                        <div class="content ">
                            <h2>{!! $project->{'title_1_'.app()->getLocale()} !!}</h2>
                            <span>{!! $project->{'title_2_'.app()->getLocale()} !!}</span>
                        </div>
                    </div>

                    <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 bottom">
                        <div class="content ">
                            <p>{!! $project->{'text_'.app()->getLocale()} !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- WORK PROJECT ==================================== -->
        <section class="work-project-images">

            <div class="container-fluid">
                <div class="row">
                    <div class="resize-images">
                        @if($previous)
                        <div class="back-project col-lg-2">
                            <div class="text"  onclick="window.location.href='{!! route('front.works.single',['id'=>$previous->id]) !!}'">
                                <span>{{ __('menu.back') }}</span>
                            </div>
                            <div class="arrow"  onclick="window.location.href='{!! route('front.works.single',['id'=>$previous->id]) !!}'">
                                <button type="button" class="btn btn-next">
                                    <img src="{{ asset('a-n/img/global/news/arrow-left.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="inner-image col-lg-8">
                            <img src="{{ asset('files/project-banner/'.$previous->cover) }}" alt="{{ $previous->{'alt_'.app()->getLocale()} }}">
                        </div>
                        @endif
                    </div>
                    @foreach($project->images as $image)
                        <div class="{{ $image->col_12 ? 'full-images' : 'resize-images' }}">
                            <div class="inner-image col-lg-{{ $image->col_12 ? 12 : 8 }}">
                                <img src="{{ asset('files/project-images/'.$image->src) }}" alt="{{ $image->{'alt_'.app()->getLocale()} }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="work_detail_author">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 information_work_detail">
                        <div class="col-lg-3 date">
                            <span class="bold">{{ __('menu.release_date') }}: </span>
                            <span>{!! $project->{'release_date_'.app()->getLocale()} !!} </span>
                        </div>

                        <div class="col-lg-3 client">
                            <span class="bold">{{ __('menu.client') }}:</span>
                            <span class="width">{!! $project->{'client_'.app()->getLocale()} !!}</span>
                        </div>


                        <div class="col-lg-3 client">
                            <span class="bold">{{ __('menu.art_director') }}:</span>
                            <span>{!! $project->{'art_director_'.app()->getLocale()} !!}</span>
                        </div>
                        <div class="col-lg-3 author">
                            <div class="a">
                                <span class="bold">{{ __('menu.designer') }}:</span>
                                <span>{!! $project->{'designer_'.app()->getLocale()} !!}</span>
                            </div>
                            <div class="b">
                                <span class="bold">{{ __('menu.copyrighter') }}:</span>
                                <span>{!! $project->{'copyrighter_'.app()->getLocale()} !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@if($next)
        <section class="work-bottom details">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="image col-lg-8">
                                <img src="{{ asset('files/project-banner/'.$next->cover) }}" alt="{{ $next->{'alt_'.app()->getLocale()} }}">
                                <div class="content">
                                    <h3>{!! $next->{'title_1_'.app()->getLocale()} !!}</h3>
                                </div>
                            </div>
                            <div class="left" onclick="window.location.href='{!! route('front.works.single',['id'=>$next->id]) !!}'">
                                <h2>{{ __('menu.next_project') }}</h2>
                                <div class="right-btn">
                                    <button type="button" class="btn btn-next">
                                        <img src="{{ asset('a-n/img/global/news/arrow-right.png') }}" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>
@endif
    </main>
@endsection


@section('js')

@endsection
