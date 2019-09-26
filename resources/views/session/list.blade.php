@extends('layouts.template_2col')
 
@section('title', 'セッション一覧')
@section('description', '説明文をここに入れる。')
@include('layouts.sidebar')

@include('layouts.head')
 
@include('layouts.header')
 
@section('content')
<section>
    <h2 class="page-title">セッション一覧</h2>
    @if (empty($contents_data))
    セッションがありません。
    @else
        @foreach ($contents_data as $content)
        <div class="session-card mb-5 row">
            <div class="session-thumbnail col-md-4">
                <a href="{{ url('session/' . $content->id) }}">
                    <span class="session-type 
                    @if($content->type->id == 1)
                        session-type-healing
                    @elseif($content->type->id == 2)
                        session-type-coaching
                    @elseif($content->type->id == 3)
                        session-type-spiritual
                    @elseif($content->type->id == 3)
                        session-type-loveandbeauty
                    @endif">{{ $content->type->name }}</span>
                    <img class="session-thumbnail-img" src="{{ asset('/img/session_thumbnail/' . $content->thumbnail_url) }}" alt="{{ $content->name }}">
                </a>
            </div>
            <div class="session-info col-md-8">
                <a class="session-title" href="{{ url('session/' . $content->id) }}">{{ $content->name }}</a>  
                <p class="session-outline">{{ $content->outline }}</p>

            </div>
        </div>
        @endforeach
    @endif

</section>
@endsection

@include('layouts.footer')