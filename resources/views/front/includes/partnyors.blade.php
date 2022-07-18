<div class="container">
    <div class="row">
        <div class="partners_all col-xs-12 col-lg-12 col-md-12"  data-aos="zoom-in" data-aos-duration="1000">
            <div class="content">
                <h2>{!! App\Helpers\Options::getOption('partnyor_home_partnyor_title_'.app()->getLocale()) !!}</h2>
                <span>{!! App\Helpers\Options::getOption('partnyor_home_partnyor_text_'.app()->getLocale()) !!}</span>
            </div>
            <div class="carousels">
                <div class="carousel-left ">
                    <div class="items owl-carousel owl-js">

                        @foreach ($partners as $partner)
                        <div class="item">
                            <div class="inside_item">
                                <div >
                                    <img  src="{{ asset('files/partnyors/'.$partner->src) }}" alt="Some Moments">
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
