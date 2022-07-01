@extends('layouts.app')

@section('title', '詳細ページ')

@section('content')

<section class="client-store">
    <h4 class="store mb-5">顧客データ詳細</h4>
    <div class="form-group">
        <form action="{{ route('update') }}" method="PATCH" class="client mb-3">
            @csrf
            <input type="text" class="form-control mb-3 name" name="name">
            <input type="text" class="form-control mb-3 kana" name="kana" required>
            <input type="text" class="form-control mb-3 tel" name="tel" required>
            <textarea name="info" id="" cols="30" rows="10" class="form-control mb-3 info"></textarea>
            <div class="button-wrapped">
                <button class="btn btn-primary form-control">保存</button>
            </div>
        </form>
        <form action="{{ route('delete') }}" class="client">
            <div class="button-wrapped">
                <button class="btn btn-primary form-control">削除</button>
            </div>
        </form>
    </div>
</section>

@endsection