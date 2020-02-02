@extends('layouts.template_1col')

@section('title', 'プラン')
@section('description', '説明文をここに入れる。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="charge">
    @if ($errors->any())
    <div class="alert alert-danger">
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
    <p class="charge__desc">※下記のボタンをクリックすると、カード情報入力画面が表示されます。</p>
    <p class="charge__desc">※Visa、Mastercard、American Expressのクレジットカードがご利用いただけます。</p>
    
    <form class="charge__form" action="{{ route('charge.createsub') }}" method="POST">
        @csrf
        <input type="hidden" name="course_cd" value="{{ $course->course_cd }}">
        <script 
        src="https://checkout.stripe.com/checkout.js" 
        class="stripe-button" 
        data-key="{{ $apiKeyPub }}" 
        data-amount="{{ $course->price }}" 
        data-name="TherapyTime | {{ $course->name }}" 
        data-email="{{ $user->email }}" 
        data-description="" 
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png" 
        data-locale="ja" 
        data-currency="jpy" 
        data-panel-label="決済画面に進む" 
        data-label="決済画面に進む" 
        $.ajaxSetup({ 
            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token" ]').attr('content') } 
        })>
        </script>
    </form>
</section>

@endsection

@include('layouts.footer')