@section('sidebar')
<section class="sidebar">
    @if(optional(Auth::user())->hasVerifiedEmail())
    <div class="sidebar-userinfo">
        @if(!empty($user_data->name)) 
        <p class="sidebar-username">{{ $user_data->name }}</p>
        <hr class="sidebar-userinfo-hr">
        @endif
        <div class="sidebar-course">
            <p class="sidebar-coursename">現在のコース：</p>
            <p class="sidebar-coursename">@if(!empty($course_name)) {{ $course_name }} @endif</p>
        </div>
    </div>
    @endif

    <div class="no-member-contact-form">
        <h2 class="sidebar-subtitle"><b>ご意見箱</b></h2>
        <p class="sidebar-memo">※こちらのフォームで送信された内容はユーザーの特定、ご返信ができません。返信希望の場合は、サイト一番下にある「お問合せ」からご連絡ください。</p>
        <form action="{{ route('opinion.sendmail') }}" method="POST">
            @csrf
            <div class="form-group sidebar-form">
                <textarea class="form-control sidebar-textarea"  name="comment" id="" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-wide">送信する</button>
        </form>
    </div>


</section>
@endsection