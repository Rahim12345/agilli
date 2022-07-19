<div class="container-fluid">
    <div class="row">
        <div class="team_left ">
            <div class="logo_team wow"  data-aos="fade-right" data-aos-duration="1200" data-wow-delay=".6s">
                <div class="image" >
                    <img class="desktop" src="img/global/partners/at.png" alt="">
                    <img class="mobile" src="img/global/partners/atplus.png" alt="">
                </div>
                <span>{!! App\Helpers\Options::getOption('team_home_partnyor_text_'.app()->getLocale()) !!}</span>
            </div>
            <div class="title wow" data-aos="fade-left" data-aos-duration="1200" data-wow-delay=".6s">
                <h2>{!! App\Helpers\Options::getOption('team_home_partnyor_title_'.app()->getLocale()) !!}</h2>
            </div>
        </div>

        <div class="team_right owl-carousel owl-theme owl-loaded owl-drag">
            @foreach ($teams as $team)
            <div class="item" data-aos="zoom-in" data-aos-duration="1000" >
                <img src="{{ asset('files/partnyors/'.$team->src) }}" alt="{{ $team->{'alt_'.app()->getLocale()} }}">
            </div>
            @endforeach
        </div>
    </div>
</div>
