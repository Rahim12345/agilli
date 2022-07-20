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
                                <img src="{!! asset('files/news-images/'.$news->image_1) !!}" alt="{{ $news->{'image_1_alt_'.app()->getLocale()} }}">
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
                            <img src="{!! asset('files/news-images/'.$news->image_2) !!}" alt="{{ $news->{'image_2_alt_'.app()->getLocale()} }}">
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
                                <li><a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}">Facebook</a></li>
                                <li><a class="tw twitPop" href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}">Twitter</a> </li>
{{--                                <li><a href="#0">Pinterest</a> </li>--}}
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ $news->{'title_'.app()->getLocale()} }}" onclick="window.open(this.href, '{{ $news->{'title_'.app()->getLocale()} }}', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">Linkedin</a> </li>
                                <li><a href="#0" onclick="copyToClipboard('{!! request()->fullUrl() !!}')">Copy Link</a></li>
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
                            <button type="button" class="btn btn-next" onclick="openpage('{!! route('front.news.single',['id'=>$previous->id,'slug'=>$previous->{'slug_'.app()->getLocale()}]) !!}')">
                                <img src="{{ asset('a-n/img/global/news/arrow-left.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 box">
                        <div class="image">
                            <img src="{!! asset('files/news-banner/'.$previous->cover) !!}" alt="{{ $previous->{'cover_alt_'.app()->getLocale()} }}">
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
    <script>
        function printDiv(printableArea) {
            w=window.open();
            w.document.write($('.myContent').html());
            w.print();
        }
        $(document).ready(function() {
            $('.fb-share').click(function(e) {
                e.preventDefault();
                window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
                return false;
            });
        });

        $('.twitPop').click(function(event) {
            var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                    ',width='  + width  +
                    ',height=' + height +
                    ',top='    + top    +
                    ',left='   + left;
            window.open(url, 'twitter', opts);
            return false;
        });

        function copyToClipboard(text) {
            var sampleTextarea = document.createElement("textarea");
            document.body.appendChild(sampleTextarea);
            sampleTextarea.value = text;
            sampleTextarea.select();
            document.execCommand("copy");
            document.body.removeChild(sampleTextarea);
            toastr.success(text,'Copied');
        }
    </script>
@endsection
