@extends('layouts.template_2col')

@section('title', 'セッション詳細')
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
                    このセッションを受けられません。
                    <!-- TODO: 文言表示ロジック直す。  -->
                    @guest
                    <!-- ログインしていない場合 -->
                    <br>
                    このセッションは会員登録後に閲覧していただけます。<br>
                    <a href="{{ route('register') }}" class="btn btn-primary session-movie-not-viewable-button">無料で会員登録する</a>
                    @endguest

                    @auth
                    <!-- ログインしている場合 -->
                    @paiduser
                    <!-- 有料会員の場合 -->
                    <!-- 有料会員であり、かつ視聴可能でないということは、 対応したプランに入会していないといえる。 -->
                    <br>
                    こちらのセッションが視聴可能なプランに入会してください。
                    <br>
                    <a href="{{ route('plan') }}" class="btn btn-primary session-movie-not-viewable-button">料金プランを見る</a>
                    @endpaiduser

                    @notpaiduser
                    <!-- 有料会員ではない場合 -->
                    <br>
                    こちらのセッションは有料会員のみ視聴可能です。<br>
                    <a href="{{ route('plan') }}" class="btn btn-primary session-movie-not-viewable-button">料金プランを見る</a>
                    @endnotpaiduser
                    @endauth
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