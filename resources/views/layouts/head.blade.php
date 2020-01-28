@section('head')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1PD8QYL13"></script>
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

@if(App::environment('production'))
<!-- クリティカルレンダリングパス -->
<style>
@import url(https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap);:root{--blue: #3490dc;--indigo: #6574cd;--purple: #9561e2;--pink: #f66d9b;--red: #e3342f;--orange: #f6993f;--yellow: #ffed4a;--green: #38c172;--teal: #4dc0b5;--cyan: #6cb2eb;--white: #fff;--gray: #6c757d;--gray-dark: #343a40;--primary: #3490dc;--secondary: #6c757d;--success: #38c172;--info: #6cb2eb;--warning: #ffed4a;--danger: #e3342f;--light: #f8f9fa;--dark: #343a40;--breakpoint-xs: 0;--breakpoint-sm: 576px;--breakpoint-md: 768px;--breakpoint-lg: 992px;--breakpoint-xl: 1200px;--font-family-sans-serif: "Nunito", sans-serif;--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace}*,*::before,*::after{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav,section{display:block}body{margin:0;font-family:"Nunito",sans-serif;font-size:0.9rem;font-weight:400;line-height:1.6;color:#212529;text-align:left;background-color:#f8fafc}h1{margin-top:0;margin-bottom:0.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}b{font-weight:bolder}a{color:#3490dc;text-decoration:none;background-color:transparent}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1{margin-bottom:0.5rem;font-weight:500;line-height:1.2}h1{font-size:2.25rem}html,body{width:100%;background:white;line-height:1.6;margin:0;padding:0;color:#444;overflow-x:hidden}*{font-family:Quicksand,"Yu Gothic",YuGothic,"Hiragino Kaku Gothic Pro",Meiryo,Osaka,"MS PGothic",sans-serif;letter-spacing:1.2px}h1{margin-bottom:0}ul{padding-left:0}a{color:#444}.img{display:block;width:100%}.header{position:fixed;top:0;left:0;width:100%;z-index:9999}#show,#hide{color:white;float:right;display:none;font-size:1.5rem}.header__sp-menu-opn-btn,.header__sp-menu-hide-btn{float:right;display:none;z-index:10}.header__nav{height:60px;width:77.2%;margin:0 auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.header__log{line-height:1;color:white;font-size:0.9rem}.header__log-link{color:white;font-size:1.25rem;font-family:"Abril Fatface",cursive;margin-right:15px}.header__menu{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;list-style:none;margin-bottom:0}.header__menu-item-link .icon{font-size:0.8rem;margin-right:0.4rem;margin-bottom:0rem;color:white}.header__menu-item-link{color:white;padding-left:25px;font-size:0.9rem}.top{position:relative}.top__img{height:100vh;width:100%;-o-object-fit:cover;object-fit:cover;display:block;background-image:url("/img/top.jpg")}.top__button{font-size:1.2rem;font-weight:bold;line-height:1;text-align:center;border-radius:3px;position:absolute;top:52%;left:11.4%;color:white;border:none;padding:2.25rem 2.5rem;display:block;border-radius:3;background:-webkit-gradient(linear,left top,right top,from(#f74949),to(#ffb947));background:linear-gradient(to right,#f74949,#ffb947);opacity:0.8;letter-spacing:2px;overflow:hidden}.top__button:before{content:"";width:200%;height:200%;background:rgba(255,255,255,0.2);-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);position:absolute;top:-12%;left:-190%}.top-assertion{background-color:#fff;opacity:0.7;position:absolute;bottom:0;width:100%;height:90px}.top-assertion__ul{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-pack:distribute;justify-content:space-around;list-style:none;height:100%}.top-assertion__li{text-align:center;font-size:1.25rem;height:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.top__message{position:absolute;top:34%;left:11.4%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);font-weight:bold;font-size:2rem;line-height:2;color:#fff;display:inline-block;text-align:left}@media screen and (max-width:768px){html,body{font-size:90%}#show,#hide{display:block}.header__nav{width:90%;height:50px}#menu{position:absolute;top:0;right:-100vw;width:100vw;height:100vh;overflow-y:hidden;background-color:#7C41CD;padding:25px 5%;padding:18px 26.25px 0}.header__menu-item{margin-bottom:5vh}.header__menu-item-link{font-size:1.5rem}.header__sp-menu-opn-btn,.header__sp-menu-hide-btn{display:block}.header__log{font-size:0.6rem}.header__log-link{font-size:1rem;margin-right:5px}.top__img{height:340px;background-image:url("/img/top-sp.jpg")}.top__message{font-size:1.1rem;top:38%;margin-bottom:20px;left:5%}.top__button{top:63%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);padding:15px 15px;font-size:0.9rem;width:200px}.top-assertion{height:70px}.top-assertion__li{font-size:1rem}}
</style>
@endif




<title>@yield('title') | Therapy Time</title>

<meta name="author" content="セラピータイム">
<meta name="keywords" content="瞑想,マインドフルネス,アプリ">
<meta name="description" itemprop="description" content="@yield('description')">



<!-- IE+8に対して、利用可能な最も互換性の高い最新のエンジンを利用するように指定する -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- モバイル端末への対応、ページをビューポートの幅に合わせてレンダリング（Android, iOS6以降）。ズームを許可しない設定「user-scalable=no」は加えない方がよい -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- iOSなどスマホで電話番号を自動で電話リンクへ書き換えるのを防ぐ -->
<meta name="format-detection" content="telephone=no">

<link rel="canonical" href="https://therapy-time.com{{ str_replace(url('/'),'',request()->fullUrl()) }}">




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