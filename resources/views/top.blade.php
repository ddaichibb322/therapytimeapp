@extends('layouts.template_1col')

@section('title', 'TOP')
@section('description', '説明文をここに入れる。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="top">
    <img class="img top__img" src="/img/top.jpg" alt="瞑想する人">
    <p class="top__message">セラピータイムは、<br>あなたの人生に「ゆとり」を作るための<br>オンライン瞑想スクールです。</p>
    <a class="top__button" href="/register">まずは無料で登録</a>
    <div class="top-assertion">
        <ul class="top-assertion__ul">
            <li class="top-assertion__li">
                <div>専門家<br><b>全コンテンツ監修</b></div>
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
    <h1 class="top-section-title">瞑想に、効果はない？</h1>
    <p class="top-section-text">「瞑想に効果はあるのか？」と多くの方は疑われると思います。<br>
        一方で、海外では世界的企業のトップやセレブ、スポーツ選手などの間で瞑想が人気となっています。<br>
        なぜそのような人たちが、こぞって瞑想に取り組むのでしょうか。<br>
        様々な理由があると思いますが、共通して、<br>
        「人生をより豊かにするために、内面（精神面）からアプローチしたい。」という場合が多いです。<br>
        過去に例がないほど物質的に豊かになった現代ですが、あなたは本当に幸せと言い切れますか？<br>
        なぜか満たされない気持ちになることはないでしょうか。<br>
    </p>
</section>
<section class="top-section">
    <h1 class="top-section-title">瞑想をおすすめする5つの理由</h1>
    <p class="top-section-text">「瞑想に効果はあるのか？」と多くの方は疑われると思います。<br>
        一方で、海外では世界的企業のトップやセレブ、スポーツ選手などの間で瞑想が人気となっています。<br>
        なぜそのような人たちが、こぞって瞑想に取り組むのでしょうか。<br>
        様々な理由があると思いますが、共通して、<br>
        「人生をより豊かにするために、内面（精神面）からアプローチしたい。」という場合が多いです。<br>
        過去に例がないほど物質的に豊かになった現代ですが、あなたは本当に幸せと言い切れますか？<br>
        なぜか満たされない気持ちになることはないでしょうか。<br>
    </p>
</section>

<section class="top-section--bg-gray">
    <h1 class="top-section-title">セラピータイムってどんなアプリ？</h1>
    <p class="top-section-text--width-img">瞑想を行う方法は多数あります。<br>例えば、瞑想教室に通ったり、本を読んで独学で取り組むこともできます。<br>その中で、セラピータイムが多くの人に選ばれるのには以下の理由があります。</p>
    <div class="top-section__img-list">
        <figure class="top-section__figure">
            <h3 class="top-section__img-title">動画コンテンツを見ながら、だれでもすぐに本格瞑想！</h3>
            <img class="top-section__img" src="/img/top_merit_3.png" alt="">
            <figcaption class="top-section__img-desc">これから瞑想を始める方も、すでに取り組んでいる方も、瞑想ツールに高額なお金を払う必要はありません。瞑想は、継続的に取り組む方に多くの効果をもたらすので、極力コストを抑えながら取り組めるセラピータイムが選ばれます。</figcaption>
        </figure>
        <figure class="top-section__figure">
            <h3 class="top-section__img-title">「いつでも」「どこでも」「何度でも」瞑想できる！</h3>
            <img class="top-section__img" src="/img/top_merit_3.png" alt="">
            <figcaption class="top-section__img-desc">瞑想を始める理由は人それぞれ違うと思います。育ってきた環境や理想とする自分像も違うので、それ自体は当然です。なので、全員に対して同じようなレッスンをしても、一人一人への効果が弱くなりがちです。セラピータイムでは、様々なニーズに応えるために、豊富な種類の動画コンテンツを用意しています。「不安を取り除きたい」という方から、「仕事で成功したい」「恋愛上手になりたい」という方まで、幅広くご利用いただけます。</figcaption>
        </figure>
    </div>
</section>
<div class="top-section__wave-gray"></div>


<section class="top-section">
    <h1 class="top-section-title">セラピータイムが選ばれる4つの理由</h1>
    <ul>
        <li class="top-section__reason-li">専門家の監修による高品質なコンテンツ</li>
        <li class="top-section__reason-li">瞑想のバリエーションが豊富</li>
        <li class="top-section__reason-li">誰でも使える簡単な操作</li>
        <li class="top-section__reason-li">月額490円〜の続けやすい価格</li>
    </ul>
    <a href="{{ route('register') }}" class="btn btn-big btn-primary">まずは無料で体験してみる</a>

</section>
<section class="top-section">
    <h1 class="top-section-title">利用者の声</h1>
    <div class="panel-voice">
        <h2 class="panel-voice-title">職場でのストレスに対処できるようになりました</h2>
        <p class="panel-voice-text">会社勤めをしていますが、激務で体も心も疲れ切っていました。<br>そんなときにセラピータイムの瞑想を1日15分程度始めてみたら、日々のストレスにまみれた気分がスッと安らぎました。</p>
        <p class="panel-voice-username">50代 会社員 男性</p>
    </div>
    <div class="panel-voice">
        <h2 class="panel-voice-title">異性に対して自信を持てるようになりました</h2>
        <p class="panel-voice-text">私は恋愛下手で、自分に自信がなく、これまで男性の方とうまく関係性を築くことができませんでした。ですが、セラピータイムで自信をつけることができました。</p>
        <p class="panel-voice-username">20代 会社員 女性</p>
    </div>
</section>
<section class="top-section">
    <h1 class="top-section-title">Q&A</h1>
    <div class="panel-qa">
        <h2 class="panel-qa-title">なぜ動画教材なのですか？</h2>
        <p class="panel-qa-text">より多くの人に、良質なサービスを、低価格でお届けするためです。</p>
    </div>
    <div class="panel-qa">
        <h2 class="panel-qa-title">他の瞑想サービスとどのように違いますか？</h2>
        <p class="panel-qa-text">コンテンツのレベルが高いです。セラピータイムのコンテンツは、瞑想やヒプノセラピー。心理学、催眠療法の専門家によって製作されています。動画コンテンツという手軽な配信サービスは多い中で、本格的な瞑想アプリというのは少ないです。そんな中で、セラピータイムは「手軽なのに本格的」という部分で、他のサービスとの差別化を実現しています。</p>
    </div>
    <a href="{{ route('register') }}" class="btn btn-big btn-primary">まずは無料で体験してみる</a>
</section>
<section class="top-section">
    <h1 class="top-section-title">お知らせ</h1>
</section>
@endsection

@include('layouts.footer')