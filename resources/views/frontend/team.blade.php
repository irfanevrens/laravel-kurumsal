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
        <h1>Ekibimiz</h1>
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">Ekibimiz</li>
        </ol>
    </div>
</section><!-- #page-title end -->

@endsection

@section('content')
<!-- content begin -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">


            <div class="row">
                @foreach($page->team as $team)
                    <div class="col-md-3 col-sm-6 bottommargin">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{ url ($team->image) }}" alt="{{ $team->name }}">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>{{ $team->name }}</h4><span>{{ $team->title }}</span></div>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="clear"></div>


        </div>

    </div>

</section>
<!-- content end -->
@endsection