@include('backend.parts.head')
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="/admin">
              {{--  <img src="/backend/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>--}}
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
@include('backend.parts.topNavigationMenu')
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
@include('backend.parts.sidebar')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                   @yield('PAGE-CONTENT','Page content goes here')
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@include('backend.parts.footer')
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/backend/assets/global/plugins/respond.min.js"></script>
<script src="/backend/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/backend/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/backend/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/angularjs/angular.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
@yield('PAGE-LEVEL-PLUGINS-SCRIPTS')
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        @yield('DOCUMENT-READY')
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>