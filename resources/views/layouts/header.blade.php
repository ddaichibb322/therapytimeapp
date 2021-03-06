@section('header')

<header class="header">
    <nav class="header__nav">
        <h1 class="header__log"><a class="header__log-link" href="{{ route('top') }}"><span class="header__site-name">TherapyTime</span>-オンラインで本格瞑想-</a></h1>
        <div id="show">
            <i class="header__sp-menu-opn-btn fa fa-bars"></i>
        </div>
        <div id="menu">
            <div id="hide">
                <i class="header__sp-menu-hide-btn fa fa-times"></i>
            </div>
            <ul class="header__menu">
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('session') }}"><i class="fas fa-chalkboard-teacher icon"></i>瞑想する</a>
                </li>
                @auth
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('mypage') }}"><i class="fas fa-home icon"></i>マイページ</a>
                </li>
                @endauth
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('plan') }}"><i class="fas fa-yen-sign icon"></i>料金</a>
                </li>
                <li class="header__menu-item">
                    <a class="header__menu-item-link" target="_blank" href="https://therapy-time.com/blog/"><i class="fas fa-book icon"></i>ブログ</a>
                </li>
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('contact') }}"><i class="far fa-envelope icon"></i>お問い合わせ</a>
                </li>
                @auth
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt icon"></i>ログアウト</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endauth
                @guest
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt icon"></i>ログイン</a>
                </li>
                <li class="header__menu-item">
                    <a class="header__menu-item-link" href="{{ route('register') }}"><i class="fas fa-pen icon"></i>新規登録</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
@endsection