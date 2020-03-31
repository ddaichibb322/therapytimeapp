@section('head')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122306552-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122306552-6');
</script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Z1PD8QYL13');
</script>

<!-- パフォーマンス向上のため文字のエンコーディングを行う -->
<meta charset="UTF-8">

<link rel="canonical" href="https://therapy-time.com{{ str_replace(url('/'),'',request()->fullUrl()) }}">


<!-- @if(App::environment('production')) -->
<!-- クリティカルレンダリングパス -->
<!-- https://www.sitelocity.com/critical-path-css-generator -->
<!-- @endif -->


<title>@yield('title') | オンライン瞑想アプリ - TherapyTime -</title>
<!-- metaタグ -->
<meta name="author" content="セラピータイム">
<meta name="keywords" content="瞑想,マインドフルネス,アプリ">
<meta name="description" content="@yield('description')">
<meta name="application-name" content="セラピータイム - もっと人生を豊かにしたい方向けのオンライン瞑想サービス">


<!-- IE+8に対して、利用可能な最も互換性の高い最新のエンジンを利用するように指定する -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- モバイル端末への対応、ページをビューポートの幅に合わせてレンダリング（Android, iOS6以降）。ズームを許可しない設定「user-scalable=no」は加えない方がよい -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- iOSなどスマホで電話番号を自動で電話リンクへ書き換えるのを防ぐ -->
<meta name="format-detection" content="telephone=no">



<!-- サイトアイコンの指定 -->
<link rel="icon" href="{{ asset('/img/icon_16.png') }}" sizes="16x16" type="image/png" /> 
<link rel="icon" href="{{ asset('/img/icon_32.png') }}" sizes="32x32" type="image/png" />  
<link rel="icon" href="{{ asset('/img/icon_48.png') }}" sizes="48x48" type="image/png" /> 
<link rel="icon" href="{{ asset('/img/icon_62.png') }}" sizes="62x62" type="image/png" />

<!-- スマホ用アイコン画像 -->
<link rel="apple-touch-icon-precomposed" href="{{ asset('/img/icon_150.png') }}" />

<!-- Windows用タイル設定 -->
<meta name="msapplication-TileImage" content="{{ asset('/img/icon_150.png') }}" />
<meta name="msapplication-TileColor" content="#7C41CD"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preload" type="text/css" href="{{ mix('/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

<noscript><link rel="stylesheet" href="{{ mix('/css/app.css') }}"></noscript>
<script>
    /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
    (function(a) {
        if (!a.loadCSS) {
            a.loadCSS = function() {}
        }
        var b = loadCSS.relpreload = {};
        b.support = (function() {
            var d;
            try {
                d = a.document.createElement("link").relList.supports("preload")
            } catch (f) {
                d = false
            }
            return function() {
                return d
            }
        })();
        b.bindMediaToggle = function(e) {
            var f = e.media || "all";

            function d() {
                if (e.addEventListener) {
                    e.removeEventListener("load", d)
                } else {
                    if (e.attachEvent) {
                        e.detachEvent("onload", d)
                    }
                }
                e.setAttribute("onload", null);
                e.media = f
            }
            if (e.addEventListener) {
                e.addEventListener("load", d)
            } else {
                if (e.attachEvent) {
                    e.attachEvent("onload", d)
                }
            }
            setTimeout(function() {
                e.rel = "stylesheet";
                e.media = "only x"
            });
            setTimeout(d, 3000)
        };
        b.poly = function() {
            if (b.support()) {
                return
            }
            var d = a.document.getElementsByTagName("link");
            for (var e = 0; e < d.length; e++) {
                var f = d[e];
                if (f.rel === "preload" && f.getAttribute("as") === "style" && !f.getAttribute("data-loadcss")) {
                    f.setAttribute("data-loadcss", true);
                    b.bindMediaToggle(f)
                }
            }
        };
        if (!b.support()) {
            b.poly();
            var c = a.setInterval(b.poly, 500);
            if (a.addEventListener) {
                a.addEventListener("load", function() {
                    b.poly();
                    a.clearInterval(c)
                })
            } else {
                if (a.attachEvent) {
                    a.attachEvent("onload", function() {
                        b.poly();
                        a.clearInterval(c)
                    })
                }
            }
        }
        if (typeof exports !== "undefined") {
            exports.loadCSS = loadCSS
        } else {
            a.loadCSS = loadCSS
        }
    }(typeof global !== "undefined" ? global : this));
</script>




@endsection