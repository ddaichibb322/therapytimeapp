@extends('layouts.template_2col')
 
@section('title', 'セッション一覧')
@section('description', '説明文をここに入れる。')
@include('layouts.sidebar')

@include('layouts.head')
 
@include('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録したメールを確認してください。</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            新しい確認リンクがメールアドレスに送信されました。
                        </div>
                    @endif
                    続行する前に、電子メールで確認リンクを確認してください。メールが届かない場合は、 <a href="{{ route('verification.resend') }}">ここをクリックして別のメールをリクエストしてください</a>。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
