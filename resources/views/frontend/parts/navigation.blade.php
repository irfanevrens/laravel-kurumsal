<nav id="primary-menu">
    <ul>
        <li @if(Request::segment(1)=='') class="current" @endif><a href="{{ URL::to('/') }}"><div>ANASAYFA</div></a></li>

        <li @if(Request::segment(1)=='hakkimizda' or Request::segment(1)=='ekibimiz' or Request::segment(1)=='sertifikalar-belgeler' or Request::segment(1)=='referanslarimiz') class="current" @endif><a href="{{ URL::to('#') }}"><div>KURUMSAL</div></a>
            <ul>
                <li><a href="{{ URL::to('hakkimizda') }}"><div>Hakkımızda</div></a></li>
                <li><a href="{{ URL::to('ekibimiz') }}"><div>Ekibimiz</div></a></li>
                <li><a href="{{ URL::to('sertifikalar-belgeler') }}"><div>Sertifikalar & Belgeler</div></a></li>
                <li><a href="{{ URL::to('referanslarimiz') }}"><div>Referanslarımız</div></a></li>
            </ul>
        </li>
        <li @if(Request::segment(1)=='galeri') class="current" @endif><a href="{{ URL::to('galeri') }}"><div>GALERİ</div></a></li>
        <li @if(Request::segment(1)=='haberler') class="current" @endif><a href="{{ URL::to('haberler') }}"><div>HABERLER</div></a></li>
        <li @if(Request::segment(1)=='kariyer') class="current" @endif><a href="{{ URL::to('kariyer') }}"><div>KARİYER</div></a></li>
        <li @if(Request::segment(1)=='iletisim') class="current" @endif><a href="{{ URL::to('iletisim') }}"><div>İLETİŞİM</div></a></li>
    </ul>
