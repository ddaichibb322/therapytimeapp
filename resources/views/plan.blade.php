@extends('layouts.template_1col')

@section('title', '料金プラン')
@section('description', 'セラピータイムは、オンライン瞑想サービスです。動画コンテンツを使って、本格的に瞑想に取り組むことが可能な新しいサービスです。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="plan-section">
    <h2 class="plan-section__title">料金プラン</h2>
    <div class="plan-section__container">
    <div class="plan-card">
            <h3 class="plan-card__title">ライトコース</h3>            
            <p class="plan-card__monthly-amount">月額&nbsp<span class="plan-card__monthly-amount-price">280</span>円(税込)</p>
            <table class="plan-card__detail-table">
                <!-- <thead class="plan-card__detail-table-head">
                    <tr class="plan-card__detail-table-head-tr">
                        <th  class="plan-card__detail-table-head-th"colspan="2">詳細</th>
                    </tr>
                </thead> -->
                <tbody class="plan-card__detail-table-body">
                    <!-- <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">月額</th>
                        <td class="plan-card__detail-table-body-td">480円</td>
                    </tr> -->
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">入会金</th>
                        <td class="plan-card__detail-table-body-td">なし</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">視聴可能期間</th>
                        <td class="plan-card__detail-table-body-td">１ヶ月（自動更新）</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">対象セッション</th>
                        <td class="plan-card__detail-table-body-td">ショート瞑想のみ</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">無料お試し期間</th>
                        <td class="plan-card__detail-table-body-td">7日</td>
                    </tr>
                </tbody>
            </table>
            <p class="plan-card__discription"><b>瞑想に興味はあるけどとりあえず費用を抑えて始めたい方や、短時間で手軽に瞑想を行いたい方向けのコースです。</b><br>「瞑想にあまり時間を割けないけれども、空いた時間や寝る前に手軽に瞑想したい」<br>「瞑想が初めてなので、とりあえず試してみたい」<br>という方には、まずはこちらのコースで瞑想習慣をつけることをおすすめします。<br>こちらのコースでは、「ショート瞑想」のセッションが受講可能です。</p>
            @notpaiduser 
            <p class="plan-card__caution">※ユーザー登録後にログインした状態で、下記のボタンからご入会いただけます。</p>
            <p class="plan-card__caution">※下記のボタンをクリックすると、決済ページに移動します。決済ページにてカード情報を入力してください。</p>
            <p class="plan-card__caution">※トライアル期間中に解約申請された場合は料金は発生しません。</p>
            <p class="plan-card__caution">※下記のボタンをクリックしただけでは、決済は行われませんのでご安心ください。</p>
            <a class="plan-card__entry" href="{{ route('charge', ['course_cd' => 'L001']) }}">入会する</a> 
            @endnotpaiduser
            @paiduser 
            <p class="plan-card__caution">※プラン変更をご希望の方はお問い合わせよりご連絡ください。</p>
            <p class="plan-card__caution">※下記ボタンをクリックすると、お問い合わせページに移動します。</p>
            <a class="plan-card__entry" href="{{ route('contact') }}">プランを変更する</a> 
            @endpaiduser  
        </div>



        <div class="plan-card">
            <h3 class="plan-card__title">瞑想コース</h3>            
            <p class="plan-card__monthly-amount">月額&nbsp<span class="plan-card__monthly-amount-price">480</span>円(税込)</p>
            <table class="plan-card__detail-table">
                <!-- <thead class="plan-card__detail-table-head">
                    <tr class="plan-card__detail-table-head-tr">
                        <th  class="plan-card__detail-table-head-th"colspan="2">詳細</th>
                    </tr>
                </thead> -->
                <tbody class="plan-card__detail-table-body">
                    <!-- <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">月額</th>
                        <td class="plan-card__detail-table-body-td">480円</td>
                    </tr> -->
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">入会金</th>
                        <td class="plan-card__detail-table-body-td">なし</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">視聴可能期間</th>
                        <td class="plan-card__detail-table-body-td">１ヶ月（自動更新）</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">対象セッション</th>
                        <td class="plan-card__detail-table-body-td">スピリチュアル以外</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">無料お試し期間</th>
                        <td class="plan-card__detail-table-body-td">7日</td>
                    </tr>
                </tbody>
            </table>
            <p class="plan-card__discription"><b>マインドフルネス・瞑想を中心にセッションを受講して、精神的な効果を得たい方向けのコースです。</b><br>「ストレスや不安を取り除きたい」<br>「集中力を高めたい」<br>「自己肯定感を高めて、自信をつけたい」<br>「瞑想を習慣化したい」<br>という方は、こちらのコースがおすすめです。<br>こちらのコースでは、スピリチュアル以外のセッションを受講可能です。</p>
            @notpaiduser 
            <p class="plan-card__caution">※ユーザー登録後にログインした状態で、下記のボタンからご入会いただけます。</p>
            <p class="plan-card__caution">※下記のボタンをクリックすると、決済ページに移動します。決済ページにてカード情報を入力してください。</p>
            <p class="plan-card__caution">※トライアル期間中に解約申請された場合は料金は発生しません。</p>
            <p class="plan-card__caution">※下記のボタンをクリックしただけでは、決済は行われませんのでご安心ください。</p>
            <a class="plan-card__entry" href="{{ route('charge', ['course_cd' => 'M001']) }}">入会する</a> 
            @endnotpaiduser
            @paiduser 
            <p class="plan-card__caution">※プラン変更をご希望の方はお問い合わせよりご連絡ください。</p>
            <p class="plan-card__caution">※下記ボタンをクリックすると、お問い合わせページに移動します。</p>
            <a class="plan-card__entry" href="{{ route('contact') }}">プランを変更する</a> 
            @endpaiduser  
        </div>
        <div class="plan-card">
            <h3 class="plan-card__title">スピリチュアルコース</h3>     
            <p class="plan-card__monthly-amount">月額&nbsp<span class="plan-card__monthly-amount-price">980</span>円(税込)</p>
            <table class="plan-card__detail-table">
                <!-- <thead class="plan-card__detail-table-head">
                    <tr class="plan-card__detail-table-head-tr">
                        <th  class="plan-card__detail-table-head-th"colspan="2">詳細</th>
                    </tr>
                </thead> -->
                <tbody class="plan-card__detail-table-body">
                    <!-- <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">月額</th>
                        <td class="plan-card__detail-table-body-td">480円</td>
                    </tr> -->
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">入会金</th>
                        <td class="plan-card__detail-table-body-td">なし</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">視聴可能期間</th>
                        <td class="plan-card__detail-table-body-td">１ヶ月（自動更新）</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">対象セッション</th>
                        <td class="plan-card__detail-table-body-td">全て</td>
                    </tr>
                    <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">無料お試し期間</th>
                        <td class="plan-card__detail-table-body-td">7日</td>
                    </tr>
                </tbody>
            </table>
            <p class="plan-card__discription"><b>スピリチュアルな世界に対する深い洞察を得ながら、自身の潜在能力を最大限引き出したい方向けのコースです。</b><br>「自分の才能を開花させたい」<br>「眠っているエネルギーを解放したい」<br>「運命を強く引き寄せたい」<br>「スピリチュアルの世界を体感してみたい」<br>という方は、こちらのコースがおすすめです。<br>こちらのコースでは、全てのセッションを受講していただくことが可能です。</p>
            @notpaiduser 
            <p class="plan-card__caution">※ユーザー登録後にログインした状態で、下記のボタンからご入会いただけます。</p>
            <p class="plan-card__caution">※下記のボタンをクリックすると、決済ページに移動します。決済ページにてカード情報を入力してください。</p>
            <p class="plan-card__caution">※トライアル期間中に解約申請された場合は料金は発生しません。</p>
            <p class="plan-card__caution">※下記のボタンをクリックしただけでは、決済は行われませんのでご安心ください。</p>
            <a class="plan-card__entry" href="{{ route('charge', ['course_cd' => 'S001']) }}">入会する</a> 
            @endnotpaiduser
            @paiduser 
            <p class="plan-card__caution">※プラン変更をご希望の方はお問い合わせよりご連絡ください。</p>
            <p class="plan-card__caution">※下記ボタンをクリックすると、お問い合わせページに移動します。</p>
            <a class="plan-card__entry" href="{{ route('contact') }}">プランを変更する</a> 
            @endpaiduser  
        </div>
    </div>

</section>

@endsection

@include('layouts.footer')