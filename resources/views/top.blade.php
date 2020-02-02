@extends('layouts.template_top')

@section('title', 'トップページ')
@section('description', 'TherapyTime(セラピータイム)は、あなたの心に「ゆとり」をもたらすオンライン瞑想アプリです。専門家監修の動画コンテンツを用いて、いつでも何度でも手軽に本格瞑想に取り組むことができる、新しい瞑想サービスです。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="top">
    <div class="img top__img">
        <h2 class="top__message">セラピータイムは、<br>あなたの人生に「ゆとり」をもたらす<br>オンライン瞑想サービスです。</h2>
        <a class="top__button" href="/register">まずは無料で登録</a>
        <p class="top__scroll-button js-scroll"><a class="top__scroll-anchor" href="">SCROLL</a></p>
        <div class="top-assertion">
            <ul class="top-assertion__ul">
                <li class="top-assertion__li">
                    <div>全コンテンツ<br><b>専門家監修</b></div>
                </li>
                <li class="top-assertion__li">
                    <div>平均評価<br><i class="fas fa-star"></i><b>4.7</b></div>
                </li>
                <li class="top-assertion__li">
                    <div>リピート率<br><b>92%</b></div>
                </li>
            </ul>
        </div>
        <!-- <div class="empty-box"></div> -->
    </div>
</section>
<!-- <section class="top-section">
    <div class="top-section-alliance">
        <p class="top-section-text">Awereness Instituteとの協賛</p>
    </div>
</section> -->
<section id="scroll-target" class="top-section">
    <h2 class="top-section-title">瞑想に、効果はない？</h2>
    <p class="top-section-text"> &nbsp;&nbsp;あなたは、<b>「瞑想ってほんとに効果はあるの？」と思っていませんか？</b><br>&nbsp;&nbsp;確かに、日本ではまだ瞑想はマイナーで、発展途上です。また目に見えない精神的な効果を実感するのは、実際にやってみないと難しいところもあります。<br>&nbsp;&nbsp;しかし、海外では<b>世界的企業のトップやセレブ、プロスポーツ選手などの間で瞑想が大変な人気</b>となっています。<br> そのような成功者たちがこぞって瞑想に取り組むのには、「気持ちに余裕を持たせ、パフォーマンスを高める」という理由が多いです。<br>&nbsp;&nbsp;世界的に見れば、情報やモノが溢れかえるこの現代に、<b>今の自分自身を打ち破り、理想の人生を手に入れるよう</b>として瞑想に取り組む人は非常に多くいます。<br>&nbsp;&nbsp;<b>瞑想の効果は、科学的にも証明されています</b>ので、あなたもぜひ一度取り組んでみてはいかがでしょうか。
    </p>
</section>
<section class="top-section--bg-gray">
    <h2 class="top-section-title">セラピータイムが瞑想をすすめる4つの理由</h2>
    <div class="top-section__reasons">
        <div class="top-section__reason">
            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">負の感情を抑える</h3>
                <img class="top-section__reason-img" src="/img/relax-2.jpg" alt="reason1">
            </div>
            <p class="top-section__reason-desc">&nbsp;&nbsp;ストレスや不安といった、<b>心の重荷となる負の感情を沈めます。</b><br>&nbsp;&nbsp;瞑想を通して、あなたを悩ますネガティブな感情や雑念を取り除き、クリアな気持ちを保つことで、<b>仕事や生活において、最大限パフォーマンスを発揮し、より高い成果を得ることにつながります。</b></p>
        </div>
        <div class="top-section__reason">
            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">集中力を高める</h3>
                <img class="top-section__reason-img" src="/img/concentration.jpg" alt="reason1">
            </div>
            <p class="top-section__reason-desc">&nbsp;&nbsp;科学的に、<b>瞑想によって集中力が高まることがわかっています。</b><br>&nbsp;&nbsp;海外をはじめ、日本国内でも福利厚生として瞑想サービスを取り入れる企業が目立ち始めています。<br>&nbsp;&nbsp;<b>仕事や趣味、人間関係において理想とする成果を得るために、瞑想が活用されています。</b></p>
        </div>
        <div class="top-section__reason">
            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">自己肯定感を高める</h3>
                <img class="top-section__reason-img" src="/img/self-esteem-2.jpg" alt="reason1">
            </div>
            <p class="top-section__reason-desc">&nbsp;&nbsp;瞑想を通して、過去のトラウマや失敗体験、恥ずかしい記憶といったものから逃げずに受け入れ、自身を肯定することができます。<br>&nbsp;&nbsp;自分の可能性を狭める「嫌な体験/記憶」も、受け入れることで、自分自身を肯定することができ、<b>確固たる自信</b>を築いていくことができます。</p>
        </div>
        <div class="top-section__reason">

            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">潜在能力を引き出す</h3>
                <img class="top-section__reason-img" src="/img/potential-2.jpg" alt="reason1">
            </div>
            <p class="top-section__reason-desc">&nbsp;&nbsp;人は得てして自分の可能性を自分で過少に規定しています。<br>&nbsp;&nbsp;その思い込みによって、本来発揮できる能力の一部しか顕在化していない可能性が高いのです。<br>&nbsp;&nbsp;瞑想を通して、自分の潜在能力に対する心理的な障壁を取り除き、<b>自身の持てる才能を開花させることができます。</b></p>
        </div>
    </div>
</section>

<section class="top-section--bg-gray">
    <h2 class="top-section-title">セラピータイムってどんなアプリ？</h2>
    <div class="top-section__merits">
        <div class="top-section__merit-container">
            <h3 class="top-section__merit-title">動画コンテンツで、費用を抑えて本格瞑想！</h3>
            <div class="top-section__merit-img-container"><img class="top-section__merit-img--1" src="/img/top-merit1.svg" alt=""></div>

            <p class="top-section__merit-desc">&nbsp;&nbsp;セラピータイムは、<b>瞑想動画コンテンツによって、費用を抑えつつ効果的な瞑想</b>を行える瞑想アプリです。<br>&nbsp;&nbsp;<b>高額なお金を払う必要はありません。</b>店舗で行う瞑想は、賃料や人件費がかかりどうしても費用が高くなりますし、独学では正しい方法にたどり着くのに時間がかかりすぎます。<br>&nbsp;&nbsp;これから瞑想を始める方も、すでに取り組んでいる方も、<b>セラピータイムなら専門家の指導下で、月280円〜のお手頃な価格で本格的な瞑想に取り組めます。</b></p>
        </div>
        <div class="top-section__merit-container">
            <h3 class="top-section__merit-title">「いつでも」「どこでも」「何度でも」瞑想できる！</h3>
            <div class="top-section__merit-img-container"><img class="top-section__merit-img--2" src="/img/top-merit2.svg" alt=""></div>
            <p class="top-section__merit-desc">&nbsp;&nbsp;セラピータイムは、<b>定額制のオンライン瞑想アプリ</b>です。<br>&nbsp;&nbsp;<b>好きな時に、好きな場所で、好きな回数だけ</b>瞑想に取り組んでいただけます。<br>&nbsp;&nbsp;瞑想になかなか時間の取れない方も、たくさん時間を割きたい方も、日本にいても海外にいても、好きなだけ、このアプリの動画コンテンツを通して<b>質の高い瞑想</b>をすることができます。<br>&nbsp;&nbsp;店舗やサロンで行なう瞑想サービスと比べて、<b>どなたでも取り組みやすい瞑想サービスです。</b></p>
        </div>
    </div>
</section>
<div class="top-section__wave-gray"></div>

<section class="top-section">
    <h2 class="top-section-title">専門家による監修・制作</h2>
    <div class="top-section-cooperation"><img class="top-section-cooperation-img" src="/img/cooperation.png" alt=""></div>
    <p class="top-section-text">　セラピータイムが提供する瞑想動画教材は、米国催眠療法協会および米国催眠士協会の公式認定スクールである<a href="https://www.awareness-ins.com/" alt="Awareness Institute" target="_blank">Awareness Institute</a>の代表・澤 璃子によって全て制作されています。<br>　<a href="https://www.awareness-ins.com/" alt="Awareness Institute" target="_blank">Awareness Institute</a>とは、催眠療法を始めとして、ヒプノセラピーやマインドフルネス瞑想といった精神や意識に関する研究を日々行なう機関です。<br>　セラピータイムは、実績豊富な<a href="https://www.awareness-ins.com/" alt="Awareness Institute" target="_blank">Awareness Institute</a>の全面協力のもと、高品質なサービスをご提供いたします。<br>
    </p>
    <div class="top-section-link"><a href="https://www.awareness-ins.com/" alt="Awareness Institute" target="_blank">Awareness Instituteのサイトはこちらから</a></div>
</section>

<section class="top-section">
    <h2 class="top-section-title">セラピータイムが選ばれる6つの理由</h2>
    <ul class="top-section__reason-ul">
        <li class="top-section__reason-li">専門家の監修による高品質なコンテンツ</li>
        <li class="top-section__reason-li">月額280円〜の続けやすい価格</li>
        <li class="top-section__reason-li">定額制だから回数を気にせず取り組める</li>
        <li class="top-section__reason-li">動画コンテンツでいつでもどこでも瞑想可能</li>
        <li class="top-section__reason-li">豊富なコンテンツから、自分にあった瞑想が探せる</li>
        <li class="top-section__reason-li">誰でも使える簡単な操作</li>
    </ul>
    <a href="{{ route('register') }}" class="btn btn-big btn-primary">まずは無料で体験してみる</a>

</section>
<section class="top-section">
    <h2 class="top-section-title">利用者の声</h2>
    <div class="panel-voice">
        <h2 class="panel-voice-title">気持ちにゆとりをもって、毎日過ごせています。</h2>
        <p class="panel-voice-text">職場でのストレスや子育てなどで、毎日イライラして余裕のない日を過ごしていましたが、セラピータイムで瞑想を続けることで<br>気持ちに余裕を持ちつつ、周りの見れた行動ができるようになって、人間関係もうまくいっています！</p>
        <p class="panel-voice-username">30代 事務職 女性</p>
    </div>
    <div class="panel-voice">
        <h2 class="panel-voice-title">仕事のパフォーマンスが上がりました！</h2>
        <p class="panel-voice-text">金融機関で会社勤めをしていますが、激務で体も心も疲れ切っていました。<br>そんなときにセラピータイムの瞑想を週に1回程度やってみたら、落ちていた仕事のパフォーマンスがかなり改善されてきています！<br>周りからも良い評価をもらえているので、これからも瞑想を続けようと思います。</p>
        <p class="panel-voice-username">50代 会社員 男性</p>
    </div>
    <div class="panel-voice">
        <h2 class="panel-voice-title">男性との恋愛の場面で、自信を持てるようになりました！</h2>
        <p class="panel-voice-text">私は恋愛下手で、自分に自信がなく、これまで男性の方とうまく関係性を築くことができませんでした。<br>ですが、セラピータイムの「自信を取り戻し、自己信頼感を高める」のセッションに週に1回くらい取り組んでいるだけで、<br>男性の前でも堂々と振る舞えるくらい、しっかりとした自信をつけることができました。</p>
        <p class="panel-voice-username">20代 会社員 女性</p>
    </div>
</section>
<section class="top-section">
    <h2 class="top-section-title">Q&A</h2>
    <div class="panel-qa">
        <h2 class="panel-qa-title">Q. 他のオンライン瞑想サービスとどのように違いますか？</h2>
        <p class="panel-qa-text">コンテンツの品質の高さです。セラピータイムのコンテンツは、全て米国公式認定機関の専門家によって製作されています。<br>他のオンライン瞑想サービスと比べてセラピータイムは、「手軽なのに本格的」という部分で差別化を実現しています。</p>
    </div>
    <div class="panel-qa">
        <h2 class="panel-qa-title">Q. なぜ動画教材なのですか？</h2>
        <p class="panel-qa-text">より多くの人に、良質なサービスを、低価格でお届けするためです。<br>瞑想を行うための教室や店舗を借りる費用を最大限抑えることによって、誰でも手軽に高品質な体験を受けられるサービスを目指しています。</p>
    </div>
    <div class="panel-qa">
        <h2 class="panel-qa-title">Q. 月額制のようですが、初回は日割り計算が行われますか？</h2>
        <p class="panel-qa-text">はい。通常毎月1日に当月分の決済が行われますが、月の途中から参加された場合には日割り計算が適用されるので、無駄な料金を支払うことなくサービスをご利用いただけます。</p>
    </div>
    <a href="{{ route('register') }}" class="btn btn-big btn-primary">まずは無料で体験してみる</a>
</section>
<!-- <section class="top-section">
    <h2 class="top-section-title">お知らせ</h2>
</section> -->
@endsection

@include('layouts.footer')