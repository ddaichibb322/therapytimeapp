@extends('layouts.template_1col')

@section('title', '特定商取引法に基づく表示')
@section('description', '説明文をここに入れる。')
@include('layouts.head')

@include('layouts.header')


@section('content')
<div class="text-page">
    <h2 class="text-page__main-title">特定商取引法に基づく表示</h2>
    <table class="text-page-table">
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">販売事業者名</th>
            <td class="text-page-table__td">セラピータイム</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">お問合わせメールアドレス</th>
            <td class="text-page-table__td">info@therapy-time.com</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">商品代金</th>
            <td class="text-page-table__td">各プランの料金に基づく</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">商品代金以外の必要料金</th>
            <td class="text-page-table__td">なし</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">販売数量</th>
            <td class="text-page-table__td">制限なし</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">お支払い方法</th>
            <td class="text-page-table__td">クレジットカード</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">領収書について</th>
            <td class="text-page-table__td">各金融機関が発行するお支払明細にて替えさせていただきます。</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">商品代金の支払時期</th>
            <td class="text-page-table__td">お申込み時</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">引き渡し時期</th>
            <td class="text-page-table__td">決済完了直後</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">引き渡し方法</th>
            <td class="text-page-table__td">本サイトにて引き渡し</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">ご返品について</th>
            <td class="text-page-table__td">商品の特性上返品はお受けできません。ご了承下さい。</td>
        </tr>
        <tr class="text-page-table__tr">
            <th class="text-page-table__th">ご解約について</th>
            <td class="text-page-table__td">解約（退部）は<a href="contact">こちら</a>からご連絡ください。毎月月末締めの翌月末解約となります。（８月１日〜８月３１日にご連絡いただいた場合、９月末日のご解約となり、９月１日が最終決済日となります。</td>
        </tr>
    </table>
</div>
@endsection

@include('layouts.footer')