<!DOCTYPE HTML>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
@yield('header')
<div class="main-container">
    <div class="two-cols">
        <div class="two-cols__main">
            @yield('content')
        </div>
        <div class="two-cols__sidebar">
            @yield('sidebar')
        </div>
    </div>
</div>
@yield('footer')
</body>
</html>