@section('header')
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
        <div class="container">
            <h1><a class="navbar-brand" href="{{ route('top') }}">Therapy Time</a></h1>            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('session') }}"><i class="fas fa-chalkboard-teacher icon"></i>セッション一覧</a>
                    </li>
                    @auth
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('mypage') }}"><i class="fas fa-home icon"></i>マイページ</a>
                    </li>
                    @endauth
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('plan') }}"><i class="fas fa-yen-sign icon"></i>プラン</a>
                    </li>
                    @auth
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt icon"></i>ログアウト</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt icon"></i>ログイン</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-pen icon"></i>新規登録</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
@endsection