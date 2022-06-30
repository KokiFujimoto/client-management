@extends('layouts.app')

@section('title', '新規登録ページ')

@section('content')

<section class="client-store">
    <h4 class="store mb-5">新規登録</h4>
    <div class="form-group">
        <form action="{{ route('store') }}" method="POST" class="client">
            @csrf
            <input type="text" placeholder="名前" class="form-control mb-3 name" name="name">
            <input type="text" placeholder="フリガナ" class="form-control mb-3 kana" name="kana" required>
            <input type="text" placeholder="電話番号　ハイフンなし" class="form-control mb-3 tel" name="tel" required>
            <textarea name="info" placeholder="顧客情報" id="" cols="30" rows="10" class="form-control mb-3 info"></textarea>
            <div class="button-wrapped">
                <button class="btn btn-primary form-control">登録</button>
            </div>
        </form>
    </div>
</section>

@endsection