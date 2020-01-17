@extends('layouts.template_2col')

@section('title', 'セッション一覧')
@section('description', '説明文をここに入れる。')
@include('layouts.sidebar')

@include('layouts.head')
@include('layouts.header')

@section('content')

<section class="session-detail">
    <h2 class="page-title">{{ $content_detail_data->name }}</h2>
    @if (empty($content_detail_data))
    <p>データがありません。</p>
    @else
    <div>
        <div class="movie">
            @if ($is_viewable)
            <iframe class="session-movie" height="360" width="600" src="{{ $content_detail_data->movie_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @else
            <div class="session-movie-not-viewable">
                <p class="session-movie-not-viewable-message">
                    このセッションを受けられません。<br>
                    <!-- TODO: 文言表示ロジック直す。  -->
                    @if(!($is_login))
                    {{-- ログインしていてかつメール認証が完了している場合のみ表示する --}}
                    このセッションは会員登録後に閲覧していただけます。<br>
                    <a href="{{ route('register') }}" class="btn btn-primary session-movie-not-viewable-button">無料で会員登録する</a>
                    @elseif($is_free)
                    このセッションに対応したコースに入会後、閲覧していただけます。<br>
                    <a href="{{ route('plan') }}" class="btn btn-primary session-movie-not-viewable-button">料金プランを見る</a>
                    @else
                    お客様が加入されているコースでは閲覧できません。このセッションに対応したコースに変更していただくと、閲覧可能となります。<br>
                    <a href="{{ route('plan') }}" class="btn btn-primary session-movie-not-viewable-button">料金プランを見る</a>
                    @endif
                </p>

            </div>
            @endif
        </div>
        @if (!empty($content_detail_data->outline))
        <div class="session-detail__info">
            <h3 class="session-detail__subtitle">セッションの概要</h3>
            <p class="session-detail__description">{{ $content_detail_data->outline }}</p>
        </div>
        @endif
        @if (!empty($content_detail_data->caution))
        <div class="session-detail__info">
            <h3 class="session-detail__subtitle">注意事項</h3>
            <p class="session-detail__description">{{ $content_detail_data->caution }}</p>
        </div>
        @endif
        @if (!empty($content_detail_data->supplement))
        <div class="session-detail__info">
            <h3 class="session-detail__subtitle">補足</h3>
            <p class="session-detail__description">{{ $content_detail_data->supplement }}</p>
        </div>
        @endif
    </div>
    @endif

</section>
@endsection

@include('layouts.footer')