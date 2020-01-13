@extends('layouts.template_1col')
@section('title', '決済完了')
@section('description', '説明文をここに入れる。')
@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="paycomplete">
    <h2 class="paycomplete__title">決済完了</h2>
    <div class="paycomplete__message">
        <p>決済に成功しました！<br>瞑想を通して、理想の自分を手に入れましょう
            ！</p>
    </div>
</section>

@endsection
@include('layouts.footer')