@section('footer')
<footer class="footer">
    <nav class="footer__nav">
        <ul class="footer__menu">
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="{{ route('agreement') }}">利用規約</a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="{{ route('policy') }}">プライバシーポリシー</a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="{{ route('tokutei') }}">特定商取引法に基づく表記</a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="{{ route('contact') }}">お問い合わせ</a>
            </li>
        </ul>
        
    </nav>
    <div class="footer-copyright">Copyright © Therapy Time All Rights Reserved.</div>
</footer>
<script src="{{ mix('/js/app.js') }}"></script> 
@endsection