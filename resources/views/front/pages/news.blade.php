@extends('front.layout.master')

@section('title')
    - {{ __('menu.news') }}
@endsection

@section('css')
@endsection

@section('content')
    <main class="main">
        <div class="mt-div"></div>
        <!-- BANNER ==================================== -->
        <section class="banner">
            <img src="{{ asset('files/news-banner/' . \App\Helpers\Options::getOption('news_banner_src')) }}" class="d-none"
                alt="">
            <div class="container-fluid">
                <div class="row">
                    <div class="image">
                        <div class="videolink">
                            <i class="fa-solid fa-play"></i>
                            <span><a href="{!! \App\Helpers\Options::getOption('news_banner_link') !!}">{!! \App\Helpers\Options::getOption('news_banner_button_text_' . app()->getLocale()) !!}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News ==================================== -->
        <section class="news_all">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="news_gallery" id="load_data"></div>
                        <div class="more">
                            <a href="javascript:(0)" id="loadMore">{{ __('menu.load_more') }}</a>
                        </div>
                        {{--  <div id="load_data_message"></div>  --}}
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection


@section('js')
    <script>
        $(document).ready(function() {

            var limit = 4;
            var start = 0;
            var action = 'inactive';

            function load_data(limit, start) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{!! route('front.news.post') !!}",
                    method: "POST",
                    data: {
                        limit: limit,
                        start: start
                    },
                    cache: false,
                    success: function(data) {
                        $('#load_data').append(data);
                        if (data == '') {
                            $('#loadMore').css('display','none');
                            $('#load_data_message').html(
                                "<button type='button' class='btn btn-info'>No Data Found</button>");
                            action = 'active';
                        } else {
                            $('#load_data_message').html(
                                "<button type='button' class='btn btn-warning'>Please Wait....</button>"
                                );
                            action = "inactive";
                        }
                    }
                });
            }

            if (action == 'inactive') {
                action = 'active';
                load_data(limit, start);
            }

            $('#loadMore').click(function(){
                if(action == 'inactive')
                {
                    action = 'active';
                    start = start + limit;
                    setTimeout(function() {
                        load_data(limit, start);
                    }, 1000);
                }
            });


            {{--  $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action ==
                    'inactive') {
                    action = 'active';
                    start = start + limit;
                    setTimeout(function() {
                        load_data(limit, start);
                    }, 1000);
                }
            });  --}}

        });
    </script>
@endsection
