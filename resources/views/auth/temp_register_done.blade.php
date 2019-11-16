@extends('layouts.template_1col')
@section('title', '仮登録完了')
@section('description', '説明文をここに入れる。')
@include('layouts.head')
 
@include('layouts.header')

@section('content')
<div class="card-body">
    <h2>仮登録完了</h2>
    <p>この度は、ご登録いただき、誠にありがとうございます。</p>
    <p>
        ご本人様確認のため、ご登録いただいたメールアドレスに、<br>
        本登録のご案内のメールが届きます。
    </p>
    <p>
        そちらに記載されているURLにアクセスし、<br>
        アカウントの本登録を完了させてください。
    </p>
</div>
@endsection
@include('layouts.footer')
