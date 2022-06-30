@extends('layouts.app')

@section('title', '一覧ページ')

@section('content')

<section class="store mb-5">
    <a href="{{ route('viewStore') }}" class="store">新規登録</a>
</section>

<section class="clients">
    <h4 class="clients-all">顧客一覧</h4>
    <a href="{{ route('viewDetail') }}" class="client-link">
        <ul class="clients-list d-flex">
            <li class="client-id">ID</li>
            <li class="client-name">名前</li>
            <li class="client-kana">フリガナ</li>
        </ul>
    </a>
</section>

@endsection