<!-- FOOTER ==================================== -->
<footer class="__js_fixed-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="footer-top">
                <div class="col-lg-2 col-md-3 col-sm-6 inner fot-logo">
                    <div class="content logos">
                        <div class="imag not-responsive" onclick="openpage('{!! route('front.home') !!}')">
                            <img src="{{ asset('a-n') }}//img/footer/footer-logo.png" alt="">
                        </div>
                        <span class="logo-text">
                            © {{ env('APP_NAME') }} {{ date('Y') }}
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 inner ">
                    <div class="content maps">
                        <span class="map-text">{{ \App\Helpers\Options::getOption('unvan_'.app()->getLocale()) }}</span>
                        <span class="phone-text"><a class="inner-a"
                                href="tel:{{ \App\Helpers\Options::getOption('tel') }}">{{ \App\Helpers\Options::getOption('tel') }}</a></span>
                        <span class="mail-text"><a class="inner-a" href="mailto:{{ \App\Helpers\Options::getOption('email') }}">{{ \App\Helpers\Options::getOption('email') }}</a></span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 inner">
                    <div class="content joins">
                        <span class="join">to join as:</span>
                        <span class="join-mail"><a class="inner-a" href="mailto:{{ \App\Helpers\Options::getOption('tel') }}">{{ \App\Helpers\Options::getOption('tel') }}</a></span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 inner content-menus">
                    <div class="content menu">
                        <span><a href="{{ route('front.home') }}">{{ __('menu.home') }}</a></span>
                        <span><a href="{!! route('front.about') !!}">{{ __('menu.about') }}</a></span>
                        <span><a href="{!! route('front.works') !!}">{{ __('menu.works') }}</a></span>
                    </div>
                    <div class="content fot-news">
                        <span><a href="#0">{{ __('menu.news') }}</a></span>
                        <span><a href="contact.html">{{ __('menu.contact') }}</a></span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 inner">
                    <div class="content social">
                        <span><a href="{{ \App\Helpers\Options::getOption('instagram') }}">instagram</a></span>
                        <span><a href="{{ \App\Helpers\Options::getOption('facebook') }}">facebook</a></span>
                        <span><a href="{{ \App\Helpers\Options::getOption('linkedin') }}">linkedin</a></span>
                        <span><a href="{{ \App\Helpers\Options::getOption('telegram') }}">telegram</a></span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="col-lg-2 lang">
                    <span class="{{ app()->getLocale() == 'en' ? 'inner-lang' : '' }}" onclick="window.location.href='{!! route('lang.swithcher',['locale'=>'en']) !!}'">en</span>
                    <span>/</span>
                    <span class="{{ app()->getLocale() == 'az' ? 'inner-lang' : '' }}" onclick="window.location.href='{!! route('lang.swithcher',['locale'=>'az']) !!}'">az</span>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-12 location">
                    <div class="location-map">
                        <iframe class="ifarame-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24304.459083281214!2d49.89820952397411!3d40.40757950149567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d511fd0d27b%3A0xff777780e7a14ab5!2sMediStyle%20Hospital!5e0!3m2!1str!2s!4v1656570365731!5m2!1str!2s"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('a-n/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.7.4/smooth-scrollbar.js"></script>
<script src="{{ asset('a-n/js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('a-n/js/plugins/packery-mode.pkgd.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('a-n/js/plugins/wow.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('a-n/js/application.js') }}"></script>
<script type="text/javascript">
    APP.filter();
    APP.anime();
    AOS.init({
        once:true,
    });
</script>
@yield('js')
</body>
</html>
