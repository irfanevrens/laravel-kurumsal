@extends('frontend.layout.master')

@section('logo')
<!-- LOGO BEGIN -->
<div id="logo">
    <a href="{{ URL::to('/') }}" class="standard-logo" data-dark-logo="/frontend/images/logo-dark.png"><img src="/frontend/images/logo.png" alt="Standart Logo"></a>
    <a href="{{ URL::to('/') }}" class="retina-logo" data-dark-logo="/frontend/images/logo-dark@2x.png"><img src="{{ url($page->logo) }}" alt="{{ $page->logoName }}"></a>
</div>
<!-- LOGO END -->
@endsection

@section('slider')
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
              @foreach($page->slider as $slider)
                <div class="swiper-slide dark" style="background-image: url('{{ $slider->file_path }}');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-top-right">
                            <h2 data-caption-animate="fadeInUp">{!! $slider->file_title!!}</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">{!! $slider->description !!}</p>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
        </div>

        <script>
            jQuery(document).ready(function($){
                var swiperSlider = new Swiper('.swiper-parent',{
                    paginationClickable: false,
                    slidesPerView: 1,
                    grabCursor: true,
                    onSwiperCreated: function(swiper){
                        $('[data-caption-animate]').each(function(){
                            var $toAnimateElement = $(this);
                            var toAnimateDelay = $(this).attr('data-caption-delay');
                            var toAnimateDelayTime = 0;
                            if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                            if( !$toAnimateElement.hasClass('animated') ) {
                                $toAnimateElement.addClass('not-animated');
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                setTimeout(function() {
                                    $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                }, toAnimateDelayTime);
                            }
                        });
                    },
                    onSlideChangeStart: function(swiper){
                        $('#slide-number-current').html(swiper.activeIndex + 1);
                        $('[data-caption-animate]').each(function(){
                            var $toAnimateElement = $(this);
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                        });
                    },
                    onSlideChangeEnd: function(swiper){
                        $('#slider .swiper-slide').each(function(){
                            if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                        });
                        $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                            if($(this).find('video').length > 0) {
                                if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                            }
                        });
                        if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                        $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                            var $toAnimateElement = $(this);
                            var toAnimateDelay = $(this).attr('data-caption-delay');
                            var toAnimateDelayTime = 0;
                            if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                            if( !$toAnimateElement.hasClass('animated') ) {
                                $toAnimateElement.addClass('not-animated');
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                setTimeout(function() {
                                    $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                }, toAnimateDelayTime);
                            }
                        });
                    }
                });

                $('#slider-arrow-left').on('click', function(e){
                    e.preventDefault();
                    swiperSlider.swipePrev();
                });

                $('#slider-arrow-right').on('click', function(e){
                    e.preventDefault();
                    swiperSlider.swipeNext();
                });

                $('#slide-number-current').html(swiperSlider.activeIndex + 1);
                $('#slide-number-total').html(swiperSlider.slides.length);
            });
        </script>
    </section>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <h3>Markalar</h3>

                <div id="oc-clients" class="owl-carousel image-carousel">
                    @foreach($page->brand as $brand)
                    <div class="oc-item"><a href="#"><img src="{{ $brand->file_path }}" alt="Clients"></a></div>
                    @endforeach
                </div>

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        var ocClients = $("#oc-clients");

                        ocClients.owlCarousel({
                            items: 5,
                            margin: 20,
                            nav: false,
                            navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                            dots: true,
                            navRewind: false,
                            responsive:{
                                0:{ items:2 },
                                480:{ items:3 },
                                768:{ items:4 },
                                1000:{ items:5 },
                                1200:{ items:6 }
                            }
                        });

                    });

                </script>

            </div>

        </div>
    </section><!-- #content end -->

@endsection