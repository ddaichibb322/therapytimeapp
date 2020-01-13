@extends('layouts.template_1col')

@section('title', '仮登録完了')
@section('description', '説明文をここに入れる。')

@include('layouts.head')
@include('layouts.header')

@section('content')
<div class="text-page">
    <h2 class="text-page__main-title">仮登録完了</h2>    
    @if (session('resent'))
    <p class="alert alert-success" role="alert">
        新しい確認メールが送信されました。
    </p>
    @endif
    <form name="form_name" method="POST" action="{{ route('verification.resend') }}">@csrf
    <p class="alert alert-success">
        入力されたメールアドレスにinfo@therapy-time.comからご確認用メッセージを送付しました。<br>メールの内容に従って本登録を行ってください。<br>メールが届かない場合は、<a href="javascript:form_name.submit()"><b>ここをクリック</b></a>して別のメールをリクエストしてください。
    </p>
    </form>
</div>
@endsection