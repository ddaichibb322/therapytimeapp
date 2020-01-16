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
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-purple">
        <div class="container">
            <div class="navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link active" href="{{ route('agreement') }}">利用規約</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link active" href="{{ route('policy') }}">プライバシーポリシー</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link active" href="{{ route('tokutei') }}">特定商取引法に基づく表記</a>
                    </li>                    
                    <li class="nav-item mr-3">
                        <a class="nav-link active" href="{{ route('contact') }}">お問い合わせ</a>
                    </li>
                </ul>
                <span class="navbar-text">Copyright © Therapy Time All Rights Reserved.</span>
            </div>
        </div>
    </nav> -->
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection