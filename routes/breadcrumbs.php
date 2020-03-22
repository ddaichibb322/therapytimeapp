<?php


Breadcrumbs::for('top', function ($trail) {
    $trail->push('トップ', route('top'));
});

Breadcrumbs::for('plan', function ($trail) {
    $trail->parent('top');
    $trail->push('料金', route('plan'));
});

Breadcrumbs::for('agreement', function ($trail) {
    $trail->parent('top');
    $trail->push('利用規約', route('agreement'));
});

Breadcrumbs::for('tokutei', function ($trail) {
    $trail->parent('top');
    $trail->push('特定商取引法に基づく表示', route('tokutei'));
});

Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('top');
    $trail->push('お問い合わせ', route('contact'));
});

Breadcrumbs::for('mypage', function ($trail) {
    $trail->parent('top');
    $trail->push('マイページ', route('mypage'));
});

Breadcrumbs::for('changepassword', function ($trail) {
    $trail->parent('top');
    $trail->push('パスワード変更', route('changepassword'));
});

Breadcrumbs::for('session', function ($trail) {
    $trail->parent('top');
    $trail->push('瞑想コンテンツ一覧', route('session'));
});

Breadcrumbs::for('session.detail', function ($trail, $name, $id) {
    $trail->parent('top');
    $trail->push('瞑想コンテンツ一覧', route('session'));
    $trail->push($name, route('session.detail', $id));
});