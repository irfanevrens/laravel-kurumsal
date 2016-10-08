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
        <h1>Galeri</h1>
        <span>Fotoğraf Galerisi</span>
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">Galeri</li>
        </ol>
    </div>
</section><!-- #page-title end -->

@endsection

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                @foreach($page->gallery as $galllery)
                <!-- gallery item -->
                <div class="col_full clearfix">
                    <h3>{{ $galllery->name }} @if ($galllery->photos->count() > 0) <code> {{ $galllery->photos->count() }} </code>  @endif </h3>
                    <div class="masonry-thumbs col-6" data-big="" data-lightbox="gallery">
                        @foreach($galllery->photos as $photo)
                            <a href="/uploads/galeri/images/{{ $photo->file_name }}" data-lightbox="gallery-item"><img class="image_fade" src="/uploads/galeri/images/{{ $photo->file_name }}" alt="{{ $photo->file_name }}"></a>
                        @endforeach
                    </div>
                </div>
                <div class="divider"><i class="icon-circle"></i></div>
                <!-- gallery item -->
                @endforeach
            </div>

            <div class="text-center">
                {!! $page->gallery->render() !!}
            </div>

        </div>
    </section><!-- #content end -->

@endsection