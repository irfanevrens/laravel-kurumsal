@extends('frontend.layout.master')

@section('logo')
<!-- LOGO BEGIN -->
<div id="logo">
    <a href="{{ URL::to('/') }}" class="standard-logo" data-dark-logo="/frontend/images/logo-dark.png"><img src="/frontend/images/logo.png" alt="Standart Logo"></a>
    <a href="{{ URL::to('/') }}" class="retina-logo" data-dark-logo="/frontend/images/logo-dark@2x.png"><img src="{{ url($page->logo) }}" alt="{{ $page->logoName }}"></a>
</div>
<!-- LOGO END -->
@endsection

@section('page-title')
<!-- Page Title -->
<section id="page-title">
    <div class="container clearfix">
        <h1>İletişim</h1>
        <span>Bize Ulaşabilirsiniz</span>
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">İletişim</li>
        </ol>
    </div>
</section><!-- #page-title end -->

@endsection

@section('content')
        <!-- Contact Form & Map Overlay Section
		============================================= -->
<section id="map-overlay">

    <div class="container clearfix">

        <!-- Contact Form Overlay
        ============================================= -->
        <div id="contact-form-overlay-mini" class="clearfix">

            <div class="fancy-title title-dotted-border">
                <h3>Bize Mail Gönderin !</h3>
            </div>

            <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

            <!-- Contact Form
            ============================================= -->
            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="iletisim" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="col_full">
                    <label for="template-contactform-name">Adınız <small>*</small></label>
                    <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                </div>

                <div class="col_full">
                    <label for="template-contactform-email">Email <small>*</small></label>
                    <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                </div>

                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-contactform-phone">Telefon</label>
                    <input type="text" id="template-contactform-phone" name="telephone" value="" class="sm-form-control" />
                </div>


                <div class="clear"></div>

                <div class="col_full">
                    <label for="template-contactform-subject">Konu <small>*</small></label>
                    <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                </div>

                <div class="col_full">
                    <label for="template-contactform-message">Mesaj <small>*</small></label>
                    <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full hidden">
                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                </div>

                <div class="col_full">
                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Gönder</button>
                </div>

            </form>

           <script type="text/javascript">
                $("#template-contactform").validate({
                    submitHandler: function(form) {
                        $('.form-process').fadeIn();
                        $(form).ajaxSubmit({
                            target: '#contact-form-result',
                            success: function() {
                                $('.form-process').fadeOut();
                                $('#template-contactform').find('.sm-form-control').val('');
                                $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                SEMICOLON.widget.notifications($('#contact-form-result'));
                            }
                        });
                    }
                });
            </script>

        </div><!-- Contact Form Overlay End -->

    </div>

    <!-- Google Map
    ============================================= -->
    <section id="google-map" class="gmap"></section>

    <script type="text/javascript"src="//maps.googleapis.com/maps/api/js?key=AIzaSyBXYo-qOyG9Fv5Sh82f1c91wOmUR3rOrQ4" async="" defer="defer"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="/frontend/js/jquery.gmap.js"></script>

    <script type="text/javascript">

        $('#google-map').gMap({

            //address: 'Mersin, Türkiye',
            latitude: {{ $page->contact->latitude }},
            longitude: {{ $page->contact->longitude }},
            maptype: 'ROADMAP',
            zoom: 17,
            markers: [
                {
                    latitude: {{ $page->contact->latitude }},
                    longitude: {{ $page->contact->longitude }},
                    //html: '<div style="width: 300px;">data</div>',
                    icon: {
                        image: "/frontend/images/icons/map-icon-red.png",
                        iconsize: [32, 39],
                        iconanchor: [32,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });

    </script><!-- Google Map End -->

</section><!-- Contact Form & Map Overlay Section End -->
        <section>
            <div class="clear"></div>
            <div class="container clearfix" style="padding: 60px 0">

                <div class="">
                    <div class="feature-box fbox-center fbox-bg fbox-light fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">A</i></a>
                        </div>
                        <h3>{!! $page->contact->title !!}<span class="subtitle">{!! $page->contact->adress !!}</span></h3>
                    </div>
                </div>

                <div style="padding: 30px 0"></div>

                <div class="col_one_third">
                    <div class="feature-box fbox-center fbox-bg fbox-light fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">T</i></a>
                        </div>
                        <h3>TELEFON<span class="subtitle">{!! $page->contact->telephone !!}</span></h3>
                    </div>
                </div>



                <div class="col_one_third">
                    <div class="feature-box fbox-center fbox-bg fbox-light fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">F</i></a>
                        </div>
                        <h3>FAX<span class="subtitle">{!! $page->contact->fax !!}</span></h3>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-center fbox-bg fbox-light fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">E</i></a>
                        </div>
                        <h3>EMAIL<span class="subtitle">{!! $page->contact->email !!}</span></h3>
                    </div>
                </div>

            </div>

            <div class="clear"></div>
        </section>

@endsection