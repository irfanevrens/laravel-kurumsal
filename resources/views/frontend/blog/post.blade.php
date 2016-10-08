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
,		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Haberler</h1>
        <span>{{ $page->post->title }}</span>
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

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{{ $page->post->title }}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <code>{{ $page->post->created_at->format('d.m.Y H:i') }} </code>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">
                            {!! $page->post->content !!}
                        <!-- Post Single - Content End -->
                            <div class="clear"></div>
                            <!-- Post Single - Share -->
                            <div class="si-share noborder clearfix">
                                <div>
                                    <a href="http://www.facebook.com/share.php?u={{ url::full() }}&title={{ $page->title }}" target="_blank" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="http://twitter.com/intent/tweet?status={{ $page->title }}+{{ url::full() }}" target="_blank" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="https://plus.google.com/share?url={{ url::full() }}" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Single - Share End -->
                        </div>
                    </div><!-- .entry end -->

                    <!-- Post Navigation
                    ============================================= -->
                    <div class="post-navigation clearfix">

                        <div class="col_half nobottommargin">
                            <a href="#" onclick="history.go(-1)" class="button button-rounded button-reveal button-large button-white button-light tleft"><i class="icon-line-arrow-left"></i><span>Geri</span></a>
                        </div>
                    </div><!-- .post-navigation end -->

                </div>

            </div>

        </div>
    </section><!-- #content end -->
@endsection