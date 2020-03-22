<!DOCTYPE html>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
@yield('header')
<div class="main-container">
    @yield('breadcrumbs')
    @yield('content')
</div>
@yield('footer')
</body>
</html>