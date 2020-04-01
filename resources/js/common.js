import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/regular'

$(function() {
  // PC版でスクロール時にヘッダーをフェードインさせる
  // スマホ版ではヘッダーフェードインを行わないようにするため、ブレイクポイントで処理を発火させる
  var mql = window.matchMedia('screen and (max-width: 768px)')
  mql.addListener(checkBreakPoint)
  checkBreakPoint(mql)

  // スマホ版のメニュー開閉処理
  spMenu()

  if (location.pathname === '/') {
    // スクロールボタンクリック
    scrollButtonClick()
  }
})

// 画面幅がブレイクポイントを超えた時に実行される処理
function checkBreakPoint(mql) {
  var $header = $('header')
  var bgPurple = 'bg-purple'
  var threshold = 100

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

function spMenu() {
  var menuOpen = 'menu-open'
  var show = document.getElementById('show')
  var hide = document.getElementById('hide')

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
}

function scrollButtonClick() {
  // #scroll-targetの縦方向の位置からヘッダーの高さを引いたところまでスクロール
  var targetY = $('#scroll-target').offset().top - $('header').height()

  //スクロールをクリックするとウィンドウの高さ分、下にスクロールする
  $('.js-scroll a').on('click', function() {
    $('html, body')
      .stop()
      .animate({ scrollTop: targetY }, 500, 'swing')
    return false
  })
}

// 動画を見終わった時刻を保存するためにのでapiをコール
if (
  location.pathname.slice(0, '/session/'.length) === '/session/' &&
  view_history_id
) {
  $(window).on('beforeunload', function(e) {
    // application/jsonだとcorsに引っかかるので、application/x-www-form-urlencodedで送る
    const blob = new Blob([{}], { type: 'application/x-www-form-urlencoded' })
    navigator.sendBeacon(base_url + '/session/update/' + view_history_id, blob)
    e.preventDefault()
  })
}
