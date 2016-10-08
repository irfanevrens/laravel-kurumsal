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
        <!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Haberler</h1>
        <span>Firmamızdan Haberler</span>
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">Haberler</li>
        </ol>
    </div>

</section><!-- #page-title end -->
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                @foreach ($page->posts as $post)
                        <!-- Posts
            ============================================= -->
                <div id="posts">
                    <div class="entry clearfix">
                        <div class="entry-title">
                            <h2><a href="/haberler/{{ $post->slug }}">{{ $post->title }}</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <code>{{ $post->created_at->format('d.m.Y H:i') }}</code>
                        </ul>
                    </div>
                    @endforeach
                </div><!-- #posts end -->

            </div>
            <div class="text-center">
                {!! $page->posts->render() !!}
            </div>

        </div>
    </section><!-- #content end -->
@endsection