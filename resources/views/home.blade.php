@extends('layouts.app')

@section('title', '一覧ページ')

@section('content')

<section class="store mb-5">
    <a href="{{ route('viewStore') }}" class="store">新規登録</a>
</section>

<section class="clients">
    <h4 class="clients-all">顧客一覧</h4>
    @if (empty($clients))
        <p class="no-data">顧客データはありません</p>
    @else
        @foreach ($clients as $client)
            <div class="client-one-data mb-3">
                <a href="{{ route('viewDetail', ['id' => $client->id]) }}" class="client-link">
                    <ul class="clients-list d-flex">
                        <li class="client-id">ID:{{ $client->id }}</li>
                        <li class="client-name">{{ $client->name }}</li>
                        <li class="client-kana">{{ $client->kana }}</li>
                    </ul>
                </a>
            </div>
        @endforeach
    @endif
</section>

@endsection