@section('sidebar')
<section class="sidebar">
    @if(optional(Auth::user())->hasVerifiedEmail())
    <h3 class="sidebar__subtitle"><b>アカウント情報</b></h3>
    <div class="sidebar-userinfo">
        <div class="sidebar-user">
            <p class="sidebar-username-title">ユーザ名：
            <span class="sidebar-username">@if(!empty($user_data->name)) {{ $user_data->name }} @else 未登録 @endif</span></p>
        </div>        
        <div class="sidebar-course">
            <p class="sidebar-coursename-title">プラン：
            <span class="sidebar-coursename">@if(!empty($course_name)) {{ $course_name }} @else プランが取得できません @endif</span></p>
        </div>
    </div>
    @endif

    <div class="no-member-contact-form">
        <h3 class="sidebar__subtitle"><b>ご意見箱</b></h3>
        <p class="sidebar__memo">※こちらのフォームで送信された内容はユーザーの特定、ご返信ができません。返信希望の場合は、サイト一番下にある「お問合せ」からご連絡ください。</p>
        <form action="{{ route('opinion.sendmail') }}" method="POST">
            @csrf
            <div class="form-group sidebar-form">
                <textarea class="form-control sidebar__textarea"  name="comment" id="" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-wide">送信する</button>
        </form>
    </div>


</section>
@endsection