@extends('layouts.app')

@section('title', '詳細ページ')

@section('content')

<section class="client-store">
    <h4 class="store mb-5">顧客データ詳細 ID:{{ $client->id }}</h4>
    <div class="form-group">
        <form action="{{ route('update', ['id' => $client->id]) }}" method="POST" class="client mb-3">
            @csrf
            @method('PATCH')
            <input type="text" class="form-control mb-3 name" name="name" value="{{ $client->name }}">
            <input type="text" class="form-control mb-3 kana" name="kana" value="{{ $client->kana }}">
            <input type="text" class="form-control mb-3 tel" name="tel" value="{{ $client->tel }}">
            <textarea name="info" id="" cols="30" rows="10" class="form-control mb-3 info">{{ $client->info }}</textarea>
            <div class="button-wrapped">
                <button class="btn btn-primary form-control" id="store-button">保存</button>
            </div>
        </form>
        <form action="{{ route('delete', ['id' => $client->id]) }}" method="POST" class="client">
            @csrf
            @method('DELETE')
            <div class="button-wrapped">
                <button class="btn btn-danger form-control" id="delete-button">削除</button>
            </div>
        </form>
    </div>
</section>

@endsection