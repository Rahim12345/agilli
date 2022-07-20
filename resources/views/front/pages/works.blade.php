@extends('front.layout.master')

@section('title') - {{ __('menu.works') }} @endsection

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
                            <button class="filter__item __js_filter-btn filter__item--active" type="button" data-filter="*" data-id="0">ALL</button>
                            @foreach($categories as $category)
                            <button class="filter__item __js_filter-btn" type="button" data-filter=".__js_{{ str_slug($category->{'name_'.app()->getLocale()}) }}" data-id="{{ $category->id }}">{{ $category->{'name_'.app()->getLocale()} }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="portfolio_gallery tab col-xs-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="__js_projects-grid2 d-flex flex-wrap" id="load_data"></div>
                    <div class="more">
                        <div id="load_data_message" style="display:none">
                            <button id="showMore2"  class="showMore-btn d-flex loading">
                                <div class="loadings"></div>
                            </button>
                        </div>

                        <a href="javascript:(0)" id="showMore">{{ __('menu.load_more') }}</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection


@section('js')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var category_id   = $('.filter__item--active').attr('data-id');
            var limit       = 2;
            var start       = 0;
            var action      = 'inactive';

            $('.__js_filter-btn').click(function () {
                $('#showMore').css('display','none');
                category_id   = $(this).attr('data-id');
                limit       = 2;
                start       = 0;
                action      = 'inactive';
                $('#load_data').html('');
                load_data(limit, start,category_id);
            });

            function load_data(limit, start,category_id = 0)
            {
                $('#load_data_message').css("display","block");
                $.ajax({
                    url:"{!! route('front.works.post') !!}",
                    method:"POST",
                    data:{limit:limit, start:start, category_id: category_id},
                    cache:false,

                    success:function(data)
                    {
                        $('#load_data_message').css("display","none");
                        $('#load_data').append(data);

                        if(data == '')
                        {
                            // $('#load_data_message').html("<button type='button' class='showMore-btn'>Məlumat tapılmadı</button>");
                            $('#showMore').css('display','none');
                            action = 'active';
                        }
                        else
                        {
                            $('#showMore').css('display','block');
                            action = "inactive";

                        }
                    }
                });
            }

            if(action == 'inactive')
            {
                action = 'active';
                load_data(limit, start, category_id);
            }

            $('#showMore').click(function(){
                $('#showMore').css('display','none');
                $('#load_data_message').css("display","block");
                action  = 'active';
                start   = start + limit;
                setTimeout(function(){
                    load_data(limit, start, category_id);
                }, 1000);
            });

            // $(window).scroll(function(){
            //     if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
            //     {
            //         action = 'active';
            //         start = start + limit;
            //         setTimeout(function(){
            //             load_data(limit, start, category_id);
            //         }, 1000);
            //     }
            // });

        });
    </script>
@endsection
