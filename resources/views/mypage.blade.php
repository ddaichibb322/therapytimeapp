@extends('layouts.template_2col')

@section('title', 'マイページ')
@section('description', '説明文をここに入れる。')
@include('layouts.sidebar')

@include('layouts.head')

@include('layouts.header')

@section('content')
<section class="mypage">
    <h2 class="page-title">マイページ</h2>
    <div class="news">
        <h3 class="news__title">お知らせ</h3>
        <div class="news__items">
            <p class="news__item">2020-01-17 セッション「目標を達成する
                」を追加しました。</p>
            <p class="news__item">2020-01-10 Therapy TimeのアプリをWeb上で公開開始しました。</p>
        </div>
    </div>
    <div class="user-course">
        <h3 class="user-course__title">入会中のプラン</h3>
        <div class="user-course__items">
            {{ $course_name }}@if($course_price !=0 )（ {{ $course_price }}円/月 ）@endif
            @notpaiduser（<a href="plan" class="user-course__link">コースへの入会はこちらから</a>）@endnotpaiduser
            @paiduser（<a href="contact" class="user-course__link">コース変更はこちらから</a>）@endpaiduser
        </div>
    </div>
    <div class="userinfo">
        <h3 class="userinfo__title">登録情報</h3>
        <div class="userinfo__items">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form class="mypage-form" action="{{ url('/mypage/' . $user_data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control-plaintext" id="email" name="email" value="{{ $user_data->email }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name">ユーザ名</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="未登録" value="{{ $user_data->name }}">
                </div>
                <div class="form-group">
                    <label for="gender">性別</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="" @if(empty($user_data->gender)) selected @endif>未登録</option>
                        <option value="0" @if($user_data->gender == '0') selected @endif>男</option>
                        <option value="1" @if($user_data->gender == '1') selected @endif>女</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prefecture">都道府県</label>
                    <select class="form-control" id="prefecture" name="prefecture">
                        <option value="" @if(empty($user_data->prefecture)) selected @endif>未登録</option>
                        <option value="1" @if($user_data->prefecture == '1') selected @endif>北海道</option>
                        <option value="2" @if($user_data->prefecture == '2') selected @endif>青森県</option>
                        <option value="3" @if($user_data->prefecture == '3') selected @endif>岩手県</option>
                        <option value="4" @if($user_data->prefecture == '4') selected @endif>宮城県</option>
                        <option value="5" @if($user_data->prefecture == '5') selected @endif>秋田県</option>
                        <option value="6" @if($user_data->prefecture == '6') selected @endif>山形県</option>
                        <option value="7" @if($user_data->prefecture == '7') selected @endif>福島県</option>
                        <option value="8" @if($user_data->prefecture == '8') selected @endif>茨城県</option>
                        <option value="9" @if($user_data->prefecture == '9') selected @endif>栃木県</option>
                        <option value="10" @if($user_data->prefecture == '10') selected @endif>群馬県</option>
                        <option value="11" @if($user_data->prefecture == '11') selected @endif>埼玉県</option>
                        <option value="12" @if($user_data->prefecture == '12') selected @endif>千葉県</option>
                        <option value="13" @if($user_data->prefecture == '13') selected @endif>東京都</option>
                        <option value="14" @if($user_data->prefecture == '14') selected @endif>神奈川県</option>
                        <option value="15" @if($user_data->prefecture == '15') selected @endif>新潟県</option>
                        <option value="16" @if($user_data->prefecture == '16') selected @endif>富山県</option>
                        <option value="17" @if($user_data->prefecture == '17') selected @endif>石川県</option>
                        <option value="18" @if($user_data->prefecture == '18') selected @endif>福井県</option>
                        <option value="19" @if($user_data->prefecture == '19') selected @endif>山梨県</option>
                        <option value="20" @if($user_data->prefecture == '20') selected @endif>長野県</option>
                        <option value="21" @if($user_data->prefecture == '21') selected @endif>岐阜県</option>
                        <option value="22" @if($user_data->prefecture == '22') selected @endif>静岡県</option>
                        <option value="23" @if($user_data->prefecture == '23') selected @endif>愛知県</option>
                        <option value="24" @if($user_data->prefecture == '24') selected @endif>三重県</option>
                        <option value="25" @if($user_data->prefecture == '25') selected @endif>滋賀県</option>
                        <option value="26" @if($user_data->prefecture == '26') selected @endif>京都府</option>
                        <option value="27" @if($user_data->prefecture == '27') selected @endif>大阪府</option>
                        <option value="28" @if($user_data->prefecture == '28') selected @endif>兵庫県</option>
                        <option value="29" @if($user_data->prefecture == '29') selected @endif>奈良県</option>
                        <option value="30" @if($user_data->prefecture == '30') selected @endif>和歌山県</option>
                        <option value="31" @if($user_data->prefecture == '31') selected @endif>鳥取県</option>
                        <option value="32" @if($user_data->prefecture == '32') selected @endif>島根県</option>
                        <option value="33" @if($user_data->prefecture == '33') selected @endif>岡山県</option>
                        <option value="34" @if($user_data->prefecture == '34') selected @endif>広島県</option>
                        <option value="35" @if($user_data->prefecture == '35') selected @endif>山口県</option>
                        <option value="36" @if($user_data->prefecture == '36') selected @endif>徳島県</option>
                        <option value="37" @if($user_data->prefecture == '37') selected @endif>香川県</option>
                        <option value="38" @if($user_data->prefecture == '38') selected @endif>愛媛県</option>
                        <option value="39" @if($user_data->prefecture == '39') selected @endif>高知県</option>
                        <option value="40" @if($user_data->prefecture == '40') selected @endif>福岡県</option>
                        <option value="41" @if($user_data->prefecture == '41') selected @endif>佐賀県</option>
                        <option value="42" @if($user_data->prefecture == '42') selected @endif>長崎県</option>
                        <option value="43" @if($user_data->prefecture == '43') selected @endif>熊本県</option>
                        <option value="44" @if($user_data->prefecture == '44') selected @endif>大分県</option>
                        <option value="45" @if($user_data->prefecture == '45') selected @endif>宮崎県</option>
                        <option value="46" @if($user_data->prefecture == '46') selected @endif>鹿児島県</option>
                        <option value="47" @if($user_data->prefecture == '47') selected @endif>沖縄県</option>
                    </select>
                </div>
                <div class="mypage-form__submit-button-container">
                    <button type="submit" class="btn btn-primary mypage-form__submit-button">更新する</button>
                    <a href="changepassword" class="mypage-form__password-change-link">パスワード変更はこちらから</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@include('layouts.footer')