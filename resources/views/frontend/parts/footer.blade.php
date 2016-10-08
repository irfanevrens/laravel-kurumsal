<footer id="footer" class="dark">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                {{ $page->copyright }}
            </div>

            <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        @foreach($page->socials as $page->social)
                            <a href="{{ $page->social->link }}" class="{{ $page->social->class }}">
                                <i class="{{ $page->social->icon }}"></i>
                                <i class="{{ $page->social->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->