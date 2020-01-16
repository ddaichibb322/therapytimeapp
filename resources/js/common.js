import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/regular';

document.addEventListener('DOMContentLoaded', function () {
    // @media screen and (max-width: 768px) と同じ
    var mql = window.matchMedia('screen and (max-width: 768px)');
    var $header = $('header');
    var bgPurple = 'bg-purple';
    var threshold = 100;

    function checkBreakPoint(mql) {
        // PCから、トップページを開いた場合のみ、
        // 初期表示時はヘッダーの背景色は無色透明にする
        if (!mql.matches && location.pathname === '/') {
            $(window).on('load scroll', function () {
                var value = $(this).scrollTop();
                if (value > threshold) {
                    $header.addClass(bgPurple);
                } else {
                    $header.removeClass(bgPurple);
                }
            });
        } else {
            $(window).off('load scroll');
            $header.addClass(bgPurple);
        }
    }
    // ブレイクポイントの瞬間に発火
    mql.addListener(checkBreakPoint);
    checkBreakPoint(mql);
});