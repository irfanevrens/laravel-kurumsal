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
        <h1>Sertifikalar & Belgeler</h1>
        <span>Sertifikalar & Belgeler</span>
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">Sertifikalar & Belgeler</li>
        </ol>
    </div>
</section><!-- #page-title end -->

@endsection

@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full clearfix">

                    <div class="row" data-lightbox="gallery">
                        @foreach($page->credential as $photo)
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <a href="/uploads/credential/{{ $photo->file_name }}" data-lightbox="gallery-item">
                                <img class="image_fade img-responsive thumbnail" src="/uploads/credential/{{ $photo->file_name }}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>

            </div>
        </div>
    </div>
</section>
@endsection