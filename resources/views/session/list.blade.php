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
    <div class="session">
        <div class="session__title-container">
            <a class="session__title" href="{{ url('session/' . $content->id) }}">{{ $content->name }}</a>
        </div>
        <div class="session-content">
            <div class="session-thumbnail">
                <a class="session-thumbnail__link" href="{{ url('session/' . $content->id) }}">
                    <span class="session-thumbnail__type 
                        @if($content->type->id == 1)
                            session-type-healing
                        @elseif($content->type->id == 2)
                            session-type-coaching
                        @elseif($content->type->id == 3)
                            session-type-spiritual
                        @elseif($content->type->id == 3)
                            session-type-loveandbeauty
                        @endif">{{ $content->type->name }}</span>
                    <div class="session-thumbnail__img-container">
                        <img class="session-thumbnail__img" src="{{ asset('/img/session_thumbnail/' . $content->thumbnail_url) }}" alt="{{ $content->name }}">
                    </div>
                    <div class="session-thumbnail__hover-text">セッションを受ける</div>
                </a>
            </div>
            <div class="session-info">
                <!-- <div class="session-info__limitation">
                        <span>対象ユーザ:</span>
                        @if($content->viewable_flg == 2)
                            <span>全員</span>
                        @else
                            @if($content->viewable_flg == 1)
                                <span>無料会員</span>
                            @endif        
                                
                            @foreach ($courses_data as $course)
                                @if(in_array($course['id'], $viewables_data[$content->type->id]))
                                {{-- 今表示しようとしているcontentsのtypeを取り出して全コースと比較し、そのtypeを閲覧できるコースかどうかチェックする --}}
                                    <span>{{ $course['name'] }}</span>
                                @endif
                            @endforeach
                        @endif
                    </div> -->
                <p class="session-info__outline">{{ $content->outline }}</p>

            </div>
        </div>
    </div>
    @endforeach
    @endif

</section>
@endsection

@include('layouts.footer')