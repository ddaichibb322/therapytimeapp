@extends('layouts.template_1col')
@section('title', '決済完了')
@section('description', '説明文をここに入れる。')
@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="paycomplete">
    <h2 class="paycomplete__title">決済完了</h2>
    <div class="paycomplete__message">
        <p>決済に成功しました！</p>
    </div>
</section>

@endsection
@include('layouts.footer')