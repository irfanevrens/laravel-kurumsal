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
        <h1>Hakkımızda</h1>
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">Hakkımızda</li>
        </ol>
    </div>
</section>
<!-- #page-title end -->
@endsection

@section('content')
 <!-- content begin -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_full clearfix">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>
<!-- #content end -->
@endsection