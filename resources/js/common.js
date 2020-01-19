import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/regular'

document.addEventListener('DOMContentLoaded', function() {
  // @media screen and (max-width: 768px) と同じ
  var mql = window.matchMedia('screen and (max-width: 768px)')
  var $header = $('header')
  var bgPurple = 'bg-purple'
  var threshold = 100

  function checkBreakPoint(mql) {
    // PCから、トップページを開いた場合のみ、
    // 初期表示時はヘッダーの背景色は無色透明にする
    if (!mql.matches && location.pathname === '/') {
      // ヘッダーはスクロール時にフェードインさせる
      $(window).on('load scroll', function() {
        // transitionを設定
        $header.css({
          transition: 'all 0.5s ease',
          '-webkit-transition': 'all 0.5s ease',
          '-moz-transition': 'all 0.5s ease',
          '-o-transition': 'all 0.5s ease'
        })
        var value = $(this).scrollTop()
        if (value > threshold) {
          $header.addClass(bgPurple)
        } else {
          $header.removeClass(bgPurple)
        }
      })
    } else {
      $(window).off('load scroll')
      $header.addClass(bgPurple)
    }
  }
  // ブレイクポイントの瞬間に発火
  mql.addListener(checkBreakPoint)
  checkBreakPoint(mql)
})

$(function() {
  'use strict'
  var menuOpen = 'menu-open'

  var show = document.getElementById('show')
  //#showを取得
  var hide = document.getElementById('hide')
  //#hideを取得

  show.addEventListener('click', function() {
    //showをクリックした時bodyに.menu-openをつける
    $('body').addClass(menuOpen)
    $('html').addClass('scroll-prevent')
  })

  hide.addEventListener('click', function() {
    //hideをクリックした時
    $('body').removeClass(menuOpen)
    $('html').removeClass('scroll-prevent')
  })
})
