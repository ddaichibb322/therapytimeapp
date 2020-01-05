import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/regular';


// // リロードしたらブラウザトップへ
// $(function() {
//     $('html,body').animate({ scrollTop: 0 }, '1');
// });

// トップページのみ、初期表示時はヘッダーの背景色は無色透明にする
$(function () {
    var $win = $(window),
        $header = $('header').children('nav'),
        bgPurple = 'bg-purple';

    if (location.pathname === '/') {

        $win.on('load scroll', function () {
            var value = $(this).scrollTop();
            if (value > 100) {
                $header.addClass(bgPurple);
            } else {
                $header.removeClass(bgPurple);
            }
        });
    } else {
        $header.addClass(bgPurple);
    }
});