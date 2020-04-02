@section('header')
<style>
    /* headerだけはパフォーマンスのためinlineに書いておく */
    .header{position:fixed;top:0;left:0;width:100%;z-index:2}#hide,#show{color:#fff;float:right;cursor:pointer;display:none;font-size:1.5rem}.header__sp-menu-hide-btn,.header__sp-menu-opn-btn{float:right;display:none;z-index:1}.header__nav{height:60px;width:77.2%;margin:0 auto;display:flex;justify-content:space-between;align-items:center}.header__log{line-height:1;color:#fff;font-size:.9rem}.header__site-name{font-size:1.25rem;font-family:Abril Fatface,cursive;margin-right:15px}.header__log-link{color:#fff;transition:all .5s ease}.header__log-link:active,.header__log-link:focus,.header__log-link:hover{color:#fff;opacity:.65}.header__menu{display:flex;justify-content:space-between;list-style:none;margin-bottom:0}.header__menu-item-link .icon{font-size:.8rem;margin-right:.4rem;margin-bottom:0;color:#fff}.header__menu-item-link{color:#fff;padding-left:25px;transition:all .5s ease;font-size:.9rem}.header__menu-item-link:active,.header__menu-item-link:focus,.header__menu-item-link:hover{color:#fff;opacity:.65}@media screen and (max-width:768px){#hide,#show{display:block}.header__nav{width:90%;height:50px}#menu{position:absolute;top:0;right:-100vw;width:100vw;height:100vh;overflow-y:hidden;background-color:#7c41cd;padding:25px 5%;transition:all .3s;padding:18px 26.25px 0}.header__menu-item{margin-bottom:55px;text-align:center}.header__menu-item-link{font-size:1.2rem}.header__sp-menu-hide-btn,.header__sp-menu-opn-btn{display:block}.menu-open #menu{right:0}.menu-open #show{display:none}.menu-open .header__menu{display:block;padding-top:60px;padding-left:0}.header__log-link:active,.header__log-link:focus,.header__log-link:hover,.header__menu-item-link:active,.header__menu-item-link:focus,.header__menu-item-link:hover{color:#fff;opacity:1}.header__log{font-size:.7rem}.header__site-name{font-size:1rem;margin-right:5px}}
</style>
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