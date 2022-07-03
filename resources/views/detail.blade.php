@extends('layouts.app')

@section('title', '詳細ページ')

@section('content')

<section class="client-store">
    <h4 class="store mb-5">顧客データ詳細 ID:{{ $client->id }}</h4>
    <div class="form-group">
        <form action="{{ route('update', ['id' => $client->id]) }}" method="POST" class="client mb-3">
            @csrf
            @method('PATCH')
            <input type="text" id="inputName" class="form-control mb-3 name" name="name" value="{{ $client->name }}" data-maxlength="255">
            <input type="text" id="inputKana" class="form-control mb-3 kana" name="kana" value="{{ $client->kana }}" data-maxlength="255">
            <input type="tel" id="inputTel" class="form-control mb-3 tel" name="tel" value="{{ $client->tel }}" data-maxlength="11">
            <textarea name="info" id="inputInfo" cols="30" rows="10" class="form-control mb-3 info" data-maxlength="511">{{ $client->info }}</textarea>
            <div class="button-wrapped">
                <button class="btn btn-primary form-control" onclick="updateMessage(); return false;">保存</button>
            </div>
        </form>
        <form action="{{ route('delete', ['id' => $client->id]) }}" method="POST" class="client">
            @csrf
            @method('DELETE')
            <div class="button-wrapped">
                <button class="btn btn-danger form-control" onclick="deleteConfirm(); return false;">削除</button>
            </div>
        </form>
    </div>
</section>

@endsection