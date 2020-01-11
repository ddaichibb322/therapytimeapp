@extends('layouts.template_1col')

@section('title', 'お問い合わせ')
@section('description', '説明文をここに入れる。')
@include('layouts.head')
 
@include('layouts.header')


@section('content')
<div class="contact">
    <h2 class="contact__title">お問い合わせ</h2>
    <form class="contact__form" action="{{ route('contact.sendmail') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレスを入力してください。">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="件名を入力してください。">
        </div> -->
        <div class="form-group">
            <label for="message">内容</label>
            <textarea class="form-control" cols="30" rows="10" id="message" name="message" placeholder="内容を入力してください。"></textarea>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary contact__submit-button">送信する</button>
    </form>
</div>

@endsection

@include('layouts.footer')