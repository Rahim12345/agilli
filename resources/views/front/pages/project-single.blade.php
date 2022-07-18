@extends('front.layout.master')

@section('title')
    - {{ __('menu.project') }}
@endsection

@section('css')
@endsection

@section('content')
    <main class="main">
        <!-- WORK BANNER ==================================== -->
        <section class="work_banner">
            <div class="work-banner-inner">
                <div class="bg" style="background: url('./img/work/banner.png');"></div>
            </div>
        </section>

        <!-- WORK TEXT ==================================== -->
        <section class="work_text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 top">
                        <div class="content ">
                            <h2>Hood Museum of Art</h2>
                            <span>Brand Identity, Signage & Environmental Graphics, Digital Design</span>
                        </div>
                    </div>

                    <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 bottom">
                        <div class="content ">
                            <p>Sed nec scelerisque purus. Mauris tincidunt eros in mi ultrices, a tincidunt nunc molestie. Integer est ante, porta ut interdum vel, pharetra vel tellus. Vestibulum porta pulvinar erat, ut bibendum turpis pretium at Suspendisse.</p>
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
                        <div class="back-project col-lg-2">
                            <div class="text">
                                <span>back</span>
                            </div>
                            <div class="arrow">
                                <button type="button" class="btn btn-next">
                                    <img src="img/global/news/arrow-left.png" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="inner-image col-lg-8">
                            <img src="img/work/img1.png" alt="">
                        </div>
                    </div>
                    <div class="full-images">
                        <div class="inner-image col-lg-12">
                            <img src="img/work/img2.png" alt="">
                        </div>
                    </div>
                    <div class="resize-images">
                        <div class="inner-image col-lg-8">
                            <img src="img/work/img3.png" alt="">
                        </div>
                    </div>
                    <div class="resize-images">
                        <div class="inner-image col-lg-8">
                            <img src="img/work/img4.png" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="work_detail_author">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 information_work_detail">
                        <div class="col-lg-3 date">
                            <span class="bold">Release date: </span>
                            <span>20 Agust, 2021 </span>
                        </div>

                        <div class="col-lg-3 client">
                            <span class="bold">Client:</span>
                            <span class="width">ACCORD Construction</span>
                        </div>


                        <div class="col-lg-3 client">
                            <span class="bold">Art Director:</span>
                            <span>Jeyhun Amirov</span>
                        </div>
                        <div class="col-lg-3 author">
                            <div class="a">
                                <span class="bold">Designer:</span>
                                <span>Yunis Qurbanov</span>
                            </div>
                            <div class="b">
                                <span class="bold">Copyrighter:</span>
                                <span>Ulvia Samadova</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="work-bottom details">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="image col-lg-8">
                                <img src="img/work/bottom_img.png" alt="">
                                <div class="content">
                                    <h3>Laudes Foundation</h3>
                                </div>
                            </div>
                            <div class="left">
                                <h2>NEXT PROJECT</h2>
                                <div class="right-btn">
                                    <button type="button" class="btn btn-next">
                                        <img src="img/global/news/arrow-right.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>

    </main>
@endsection


@section('js')

@endsection
