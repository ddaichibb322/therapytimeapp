@extends('layouts.template_1col')

@section('title', 'プラン')
@section('description', '説明文をここに入れる。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="charge">
    @if ($errors->any())
    <div class="alert alert-danger mt20">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2 class="charge__title">決済ページ</h2>
    <p class="charge__plan">コース名&nbsp<span class="charge__plan-name">{{ $course->name }}</span></p>
    <p class="charge__monthly-amount">月額&nbsp<span class="charge__monthly-amount-price">{{ number_format($course->price) }}</span>円(税込)</p>

    <p class="charge__monthly-desc"></p>

    <form class="charge__form" action="{{ route('charge.createsub') }}" method="POST">
        @csrf
        <input type="hidden" name="course_cd" value="{{ $course->course_cd }}">
        <script 
        src="https://checkout.stripe.com/checkout.js" 
        class="stripe-button" 
        data-key="{{ $apiKeyPub }}" 
        data-amount="{{ $course->price }}" 
        data-name="{{ $course->name }} | TherapyTime" 
        data-email="{{ $user->email }}" 
        data-description=""         
        data-locale="ja" 
        data-currency="jpy" 
        data-panel-label="支払う" 
        data-label="カード情報を入力する" 
        $.ajaxSetup({ 
            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token" ]').attr('content') } 
        })>
        </script>
    </form>
    <p class="charge__desc">※上記のボタンをクリックすると、カード情報入力画面が表示されます。</p>
    <p class="charge__desc">※Visa、Mastercard、American Expressのクレジットカードがご利用いただけます。</p>    
    <p class="charge__desc">※無料お試し期間中に解約申請された場合は料金は発生しません。</p>
    <p class="charge__desc">※TherapyTimeでは、大手決済代行サービス「Stripe」を使用しており、クレジットカード情報を当サービス上に保存することなく安心して決済を行うことが出来ます。</p>
    <p class="charge__desc">※カード情報入力フォームの「支払う」ボタンを押した時、支払の処理完了まで少し時間がかかります。処理は問題なく進んでいますので、ダブルクリックはしないでください。</p>
</section>

@endsection

@include('layouts.footer')