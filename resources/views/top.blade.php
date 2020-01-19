@extends('layouts.template_top')

@section('title', 'TOP')
@section('description', '説明文をここに入れる。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="top">
    <img class="img top__img--pc" src="/img/top.jpg" alt="PC用トップ画像">
    <img class="img top__img--sp" src="/img/top-sp.jpg" alt="スマホ用トップ画像">
    <p class="top__message">セラピータイムは、<br>あなたの人生に「ゆとり」を作るための<br>オンライン瞑想スクールです。</p>
    <a class="top__button" href="/register">まずは無料で登録</a>
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

</section>
<!-- <section class="top-section">
    <div class="top-section-alliance">
        <p class="top-section-text">Awereness Instituteとの協賛</p>
    </div>
</section> -->
<section class="top-section">
    <h2 class="top-section-title">瞑想に、効果はない？</h2>
    <p class="top-section-text"> 「瞑想に効果はあるのか？」と思っていませんか？<br>　日本でまだ瞑想は発展途上ですが、海外では世界的企業のトップやセレブ、プロスポーツ選手などの間で瞑想が大変な人気となっています。<br> そのような成功者たちがこぞって瞑想に取り組むのには、「精神力を向上させて、気持ちに余裕を持たせ、パフォーマンスを高める」という理由が多いです。<br>　世界的に見れば、情報やモノが溢れかえるこの現代に、今の自分自身を打ち破り、理想の人生を手に入れるようとして瞑想に取り組む人は非常に多くいます。<br> 瞑想の効果は、科学的にも証明されていますので、あなたもぜひ一度取り組んでみてはいかがでしょうか。
    </p>
</section>
<section class="top-section--bg-gray">
    <h2 class="top-section-title">セラピータイムが瞑想をすすめる4つの理由</h2>
    <div class="top-section__reasons">
        <div class="top-section__reason">
            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">負の感情を抑える</h3>
                <img class="top-section__reason-img" src="/img/relax.jpg" alt="reason1">
            </div>
            <p class="top-section__reason-desc">ストレスや不安といった、心を悩ませる負の感情を沈めます。瞑想を通して、あなたを悩ますネガティブな感情や雑念を取り除き、クリアな気持ちを保つことで、より豊かな人生を歩んでいくことができます。</p>
        </div>
        <div class="top-section__reason">
            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">集中力を高める</h3>
                <img class="top-section__reason-img" src="/img/concentration.jpg" alt="reason1">
            </div>

            <p class="top-section__reason-desc">科学的に、瞑想によって集中力が高まることがわかっています。仕事や趣味、人間関係において理想とする成果を得るために、瞑想が活用されています。</p>
        </div>
        <div class="top-section__reason">

            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">自己肯定感を高める</h3>
                <img class="top-section__reason-img" src="/img/self-esteem.jpg" alt="reason1">
            </div>

            <p class="top-section__reason-desc">瞑想を通して、過去のトラウマや失敗体験、恥ずかしい記憶といったものから逃げずに受け入れ、自身を肯定する。それによって、確固たる自信を築いていくことができます。</p>
        </div>
        <div class="top-section__reason">

            <div class="top-section__reason-img-container">
                <h3 class="top-section__reason-title">潜在能力を引き出す</h3>
                <img class="top-section__reason-img" src="/img/potential.jpg" alt="reason1">
            </div>
            <p class="top-section__reason-desc">人は得てして自分の可能性を自分で過少に規定しています。瞑想を通して、自分の発揮できる潜在能力に対する心理的な障壁を取り除き、自身の持てる才能を開花させることができます。</p>
        </div>
    </div>
</section>
<div class="top-section__wave-gray"></div>

<section class="top-section">
    <h2 class="top-section-title">セラピータイムってどんなアプリ？</h2>
    <!-- <p class="top-section-text--width-img">瞑想を行う方法は多数あります。<br>例えば、瞑想教室に通ったり、本を読んで独学で取り組むこともできます。<br>その中で、セラピータイムが多くの人に選ばれるのには以下の理由があります。</p> -->
    <div class="top-section__merits">
        <div class="top-section__merit-container">
            <h3 class="top-section__merit-title">動画教材で、だれでもすぐに本格瞑想！</h3>
            <div class="top-section__merit-img-container"><img class="top-section__merit-img--1" src="/img/top-merit1.svg" alt=""></div>

            <p class="top-section__merit-desc">セラピータイムは瞑想を誰でも簡単に行えるような動画コンテンツをご提供しています。高額なお金を払う必要はありません。店舗で行う瞑想は賃料や人件費で必要以上の価格を払う必要がありますし、独学では正しい方法にたどり着くのに時間がかかりすぎます。これから瞑想を始める方も、すでに取り組んでいる方も、セラピータイムなら、専門家の指導下で、安価な値段で本格的な瞑想に取り組めます。</p>
        </div>
        <div class="top-section__merit-container">
            <h3 class="top-section__merit-title">「いつでも」「どこでも」「何度でも」瞑想できる！</h3>
            <div class="top-section__merit-img-container"><img class="top-section__merit-img--2" src="/img/top-merit2.svg" alt=""></div>
            <p class="top-section__merit-desc">セラピータイムは、定額制もオンラインサービスです。好きな時に、好きな場所で、好きな回数、瞑想に取り組んでいただけます。瞑想になかなか時間の取れない方も、たくさん時間を割きたい方も、日本にいても海外にいても、好きなだけ瞑想をすることができます。店舗やサロンといった瞑想サービスと比べても、どなたでも非常に取り組みやすいサービスです。</p>
        </div>
    </div>
</section>

<section class="top-section">
    <h2 class="top-section-title">Awareness Instituteとの協賛</h2>
    <div class="top-section-cooperation"><img class="top-section-cooperation-img" src="/img/cooperation.png" alt=""></div>
    <p class="top-section-text">　セラピータイムが提供する瞑想動画教材は、米国催眠療法協会および米国催眠士協会の公式認定スクールであるAwareness Instituteの代表・澤 璃子さんによって全て制作されています。<br>　Awareness Instituteとは、催眠療法を始めとして、ヒプノセラピーやマインドフルネス瞑想といった精神や意識に関する研究を日々行ない、優秀な生徒も数多く所属する機関です。<br>　セラピータイムは、実績豊富なAwareness Instituteの全面協力のもと、高品質なサービスをご提供いたします。<br>
    </p>
</section>

<section class="top-section">
    <h2 class="top-section-title">セラピータイムが選ばれる4つの理由</h2>
    <ul class="top-section__reason-ul">
        <li class="top-section__reason-li">専門家の監修による高品質なコンテンツ</li>
        <li class="top-section__reason-li">誰でも使える簡単な操作</li>
        <li class="top-section__reason-li">月額490円〜の続けやすい価格</li>
        <li class="top-section__reason-li">瞑想コンテンツが豊富 </li>
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
        <p class="panel-qa-text">はい。毎月1日に当月分の決済が行われますが、月の途中から参加された場合には日割り計算が適用されるので、無駄な料金を支払うことなくサービスをご利用いただけます。</p>
    </div>
    <a href="{{ route('register') }}" class="btn btn-big btn-primary">まずは無料で体験してみる</a>
</section>
<!-- <section class="top-section">
    <h2 class="top-section-title">お知らせ</h2>
</section> -->
@endsection

@include('layouts.footer')