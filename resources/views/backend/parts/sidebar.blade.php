<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="300">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            
            <!-- Bileşenler -->
            <li @if(Request::segment(2)=='logo' or Request::segment(2)=='slider' or Request::segment(2)=='brand' or Request::segment(2)=='social' or Request::segment(2)=='modal') class="start active open" @else class="start" @endif>
                <a href="javascript:;">
                    <i class=""></i>
                    <span class="title">Bileşenler</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li @if(Request::segment(2)=='logo' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/logo')}}">
                            <i class=""></i>
                            Logo</a>
                    </li>

                    <li @if(Request::segment(2)=='slider' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/slider')}}">
                            <i class=""></i>
                            Slider</a>
                    </li>

                    <li @if(Request::segment(2)=='brand' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/brand')}}">
                            <i class=""></i>
                            Markalar</a>
                    </li>

                    <li @if(Request::segment(2)=='social' and Request::segment(3)=='' or Request::segment(2)=='social' and Request::segment(3)=='create') class="active" @endif>
                        <a href="{{URL::to('admin/social')}}">
                            <i class=""></i>
                            Sosyal Hesaplar</a>
                    </li>

                    <li @if(Request::segment(2)=='modal' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/modal')}}">
                            <i class=""></i>
                            Açılır Pencere</a>
                    </li>

                </ul>
            </li>
            <!-- Bileşenler -->

            <!-- Sayfalar .last -->
            <li @if(Request::segment(2)=='references' or Request::segment(2)=='contact' or Request::segment(2)=='about' or Request::segment(2)=='team' or Request::segment(2)=='galeri' or Request::segment(2)=='news') class="last active open" @else class="last" @endif>
                <a href="javascript:;">
                    <i class=""></i>
                    <span class="title">Sayfalar</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li @if(Request::segment(2)=='about' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/about')}}">
                            <i class=""></i>
                            Hakkımızda</a>
                    </li>

                    <li @if(Request::segment(2)=='team' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/team')}}">
                            <i class=""></i>
                            Ekibimiz</a>
                    </li>

                    <li @if(Request::segment(2)=='references' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/references')}}">
                            <i class=""></i>
                            Referanslar</a>
                    </li>

                    <li @if(Request::segment(2)=='contact' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/contact')}}">
                            <i class=""></i>
                            İletişim</a>
                    </li>

                    <li @if(Request::segment(2)=='galeri' and Request::segment(3)=='') class="active" @endif>
                        <a href="{{URL::to('admin/galeri')}}">
                            <i class=""></i>
                            Galeri</a>
                    </li>

                    <li @if(Request::segment(2)=='news' and Request::segment(3)=='' or Request::segment(2)=='news') class="active" @endif>
                        <a href="{{URL::to('admin/news')}}">
                            <i class=""></i>
                            Haberler</a>
                    </li>

                </ul>
            </li>
            <!-- Sayfalar .last -->


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->
