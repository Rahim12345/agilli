<div class="container-fluid">
    <div class="title wow"  data-aos="fade-right" data-aos-duration="1200" data-wow-delay=".4s">YENİ</div>
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
            <div class="col-lg-2 right" onclick="openpage('{!! route('front.news') !!}')" data-aos="fade-left" data-aos-duration="1200" data-wow-delay=".4s">
                <h2>{{ __('menu.diger_xeberler') }}</h2>
                <div class="right-btn">
                    <button type="button" class="btn btn-next">
                        <img src="{{ asset('a-n/img/global/news/arrow-right.png') }}" alt="">
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>
