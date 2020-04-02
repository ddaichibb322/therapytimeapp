<!DOCTYPE html>
<html lang="ja">

<head>
    @yield('head')
</head>

<body>
    <style>
        .loader__container {
            display: block;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            background: white;
            z-index: 1;
        }

        .loader {
            display: block;
            position: fixed;
            top: 45%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            color: #fff;
            z-index: 2;
            overflow: hidden;
        }
        .loader__img {
            width:50px;
        }
        .wrap {
            display: none;
        }
    </style>
    <div class="loader__container">
        <div class="loader">
            <img class="loader__img" src="{{ asset('/img/loading.gif') }}" alt="loading">
        </div>
    </div>
    <div class="wrap">
        @yield('header')
        <div class="top-container">
            @yield('content')
        </div>
        @yield('footer')
    </div>
</body>

</html>