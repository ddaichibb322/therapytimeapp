<!DOCTYPE HTML>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
@yield('header')
<div class="container main-container">
    <div class="row">
        <div class="col-md-9">
            @yield('content')
        </div>
        <div class="col-md-3">
            @yield('sidebar')
        </div>
    </div>
</div>
@yield('footer')
</body>
</html>