
@extends('layouts.template_2col')

@section('title', 'セッション一覧')
@section('description', '説明文をここに入れる。')
@include('layouts.sidebar')

@include('layouts.head')
@include('layouts.header')
 
@section('content')

<section>
    <h2 class="page-title">{{ $content_detail_data->name }}</h2>
    @if (empty($content_detail_data))
        <p>データがありません。</p>
    @else
        <div class="session-detail">
        
            <div class="movie">
                @if ($is_viewable)
                <iframe class="session-movie" height="360" width="600" src="{{ $content_detail_data->movie_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                <div class="session-movie-not-viewable">
                    <p class="session-movie-not-viewable-message">
                        このセッションを受けられません。<br>
                        @if(!$is_login)
                        このセッションはユーザ登録後に閲覧していただけます。
                        @elseif($is_free)
                        このセッションに対応したコースに入会後、閲覧していただけます。
                        @else 
                        お客様が加入されているコースでは閲覧できません。このセッションに対応したコースに変更していただくと、閲覧可能となります。
                        @endif
                    </p>
                </div>                
                @endif
            </div>
            <div class="session-detail-info">
                <h2 class="session-detail-subtitle">このセッションの概要</h2>
                <p class="session-detail-description">{{ $content_detail_data->outline }}</p>
            </div>
            <div class="session-detail-info">
                <h2 class="session-detail-subtitle">注意事項</h2>
                <p class="session-detail-description">{{ $content_detail_data->caution }}</p>
            </div>
            <div class="session-detail-info">
                <h2 class="session-detail-subtitle">補足</h2>
                <p class="session-detail-description">{{ $content_detail_data->supplement }}</p>
            </div>

        </div>
    @endif

</section>
@endsection

@include('layouts.footer')