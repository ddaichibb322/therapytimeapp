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


@if(App::environment('production'))
<!-- クリティカルレンダリングパス -->
<!-- https://www.sitelocity.com/critical-path-css-generator -->
<style>:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h1,h2,h3{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}b{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h2,h3{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}img{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}body{min-width:992px!important}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav,section{display:block}body{margin:0;font-family:Nunito,sans-serif;font-size:.9rem;font-weight:400;line-height:1.6;color:#212529;text-align:left;background-color:#f8fafc}h1,h2,h3{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-bottom:1rem}ul{margin-top:0}b{font-weight:bolder}a{color:#3490dc;text-decoration:none;background-color:rgba(0,0,0,0)}img{border-style:none}img{vertical-align:middle}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h2,h3{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.25rem}h2{font-size:1.8rem}h3{font-size:1.575rem}img{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}body{min-width:992px!important}@media screen and (max-width:768px){.sp{display:block}body,html{font-size:90%}#hide,#show{display:block}.header__nav{width:90%;height:50px}#menu{position:absolute;top:0;right:-100vw;width:100vw;height:100vh;overflow-y:hidden;background-color:#7c41cd;padding:18px 26.25px 0}.header__menu-item{margin-bottom:55px;text-align:center}.header__menu-item-link{font-size:1.2rem}.header__sp-menu-hide-btn,.header__sp-menu-opn-btn{display:block}.header__log{font-size:.7rem}.header__site-name{font-size:1rem;margin-right:5px}.top__img{height:400px;background-image:url(/img/top-sp.jpg)}.top__message{top:38%;margin-bottom:20px}.top__button--top,.top__message{left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);font-size:1.1rem;width:240px}.top__button--top{top:66%;padding:15px;opacity:1}.top__button{padding:15px;font-size:1.1rem;width:240px;opacity:1}.top__scroll-button{display:none}.top-assertion{height:70px}.top-assertion__li{font-size:1rem}.top-section,.top-section--bg-gray{padding:40px 25px}.top-section-title{margin-bottom:25px;padding:5px;font-size:1.4rem}.top-section-text{width:90%;font-size:1.1rem}.top-section__reasons{display:block}.top-section__reason{margin-bottom:30px}.top-section__reason-title{font-size:1.2rem}.top-section__reason-desc{width:90%}.top-section__merits{display:block;padding-top:0}.top-section__merit-title{margin-bottom:30px}.top-section__merit-desc{width:90%}.top-section__merit-img--1,.top-section__merit-img--2{padding-top:0}.top-section__merit-img-container{height:auto;margin-bottom:30px}.top-section__merit-container:first-child{margin-bottom:50px}.top-section__reason-ul{margin-bottom:30px}.top-section__reason-li{font-size:1.2rem;padding-left:25px;background-size:1.2rem;background-position-y:1.2rem}.top-section-link{width:90%}}</style>

@endif


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