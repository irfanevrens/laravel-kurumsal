<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    @include('frontend.parts.meta')
    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/frontend/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/frontend/style.css" type="text/css" />
    <link rel="stylesheet" href="/frontend/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/frontend/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/frontend/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="/frontend/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="/frontend/js/jquery.js"></script>
    <script type="text/javascript" src="/frontend/js/plugins.js"></script>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                @yield('logo','logo')

                <!-- Primary Navigation
                ============================================= -->
                @include('frontend.parts.navigation')

                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Yaz &amp; Enter Tuşuna Bas..">
                    </form>
                </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    @yield('slider')
    @yield('page-title')
    <!-- Content
    ============================================= -->
    @yield('content','content')
    <!-- Footer
    ============================================= -->
    @include('frontend.parts.footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="/frontend/js/functions.js"></script>

</body>
</html>