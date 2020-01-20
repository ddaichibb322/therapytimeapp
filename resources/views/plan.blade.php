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
            <h3 class="plan-card__title">瞑想コース</h3>            
            <p class="plan-card__monthly-amount">月額&nbsp<span class="plan-card__monthly-amount-price">480</span>円</p>
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
                        <td class="plan-card__detail-table-body-td">スピリチュアル以外全て</td>
                    </tr>
                    <!-- <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">無料お試し期間</th>
                        <td class="plan-card__detail-table-body-td">7日</td>
                    </tr> -->
                </tbody>
            </table>
            <p class="plan-card__discription"><b>マインドフルネス・瞑想を中心にセッションを受講して、精神的な効果を得たい方向けのコースです。</b><br>「ストレスや不安を取り除きたい」<br>「集中力を高めたい」<br>「自己肯定感を高めて、自信をつけたい」<br>「瞑想を習慣化したい」<br>という方は、こちらのコースがおすすめです。<br>こちらのコースでは、スピリチュアル以外のセッションを受講可能です。</p>
            @notpaiduser <p class="plan-card__caution">ユーザー登録後にログインした状態で、下記のボタンから入会いただけます。</p>
            <a class="plan-card__entry" href="{{ route('charge', ['course_cd' => 'M001']) }}">入会する</a> @endnotpaiduser
            @paiduser <p class="plan-card__caution">プラン変更をご希望の方はお問い合わせよりご連絡ください。</p>
            <a class="plan-card__entry" href="{{ route('contact') }}">プランを変更する</a> @endpaiduser  
        </div>
        <div class="plan-card">
            <h3 class="plan-card__title">スピリチュアルコース</h3>     
            <p class="plan-card__monthly-amount">月額&nbsp<span class="plan-card__monthly-amount-price">980</span>円</p>
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
                    <!-- <tr class="plan-card__detail-table-body-tr">
                        <th class="plan-card__detail-table-body-th">無料お試し期間</th>
                        <td class="plan-card__detail-table-body-td">7日</td>
                    </tr> -->
                </tbody>
            </table>
            <p class="plan-card__discription"><b>スピリチュアルな世界に対する深い洞察を得ながら、自身の潜在能力を最大限引き出したい方向けのコースです。</b><br>「自分の才能を開花させたい」<br>「眠っているエネルギーを解放したい」<br>「運命を強く引き寄せたい」<br>「スピリチュアルの世界を体感してみたい」<br>という方は、こちらのコースがおすすめです。<br>こちらのコースでは、全てのセッションを受講可能です。</p>
            @notpaiduser <p class="plan-card__caution">ユーザー登録後にログインした状態で、下記のボタンから入会いただけます。</p>
            <a class="plan-card__entry" href="{{ route('charge', ['course_cd' => 'S001']) }}">入会する</a> @endnotpaiduser
            @paiduser <p class="plan-card__caution">プラン変更をご希望の方はお問い合わせよりご連絡ください。</p>
            <a class="plan-card__entry" href="{{ route('contact') }}">プランを変更する</a> @endpaiduser  
        </div>
    </div>

</section>

@endsection

@include('layouts.footer')