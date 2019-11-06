@extends('layouts.template_1col')
 
@section('title', 'プラン')
@section('description', '説明文をここに入れる。')

@include('layouts.head')
 
@include('layouts.header')
 
@section('content')
<section class="plan-section">
    <h2 class="plan-title">料金プラン</h2>
    <div class="plan-container">
        <div class="plan">
            <h3>瞑想コース</h3>
            <a href="{{ route('charge', ['course_cd' => 'M001']) }}">入会する</a>
        </div>
        <div class="plan">
            <h3>スピリチュアルコース</h3>
            <a href="{{ route('charge', ['course_cd' => 'S001']) }}">入会する</a>
        </div>
    </div>

</section>

@endsection
 
@include('layouts.footer')