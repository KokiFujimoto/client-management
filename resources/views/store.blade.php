@extends('layouts.app')

@section('title', '新規登録ページ')

@section('content')

<section class="client-store">
    <h4 class="store mb-5">新規登録</h4>
    <div class="form-group">
        <form action="{{ route('store') }}" method="POST" class="client">
            @csrf
            <input type="text" id="inputName" placeholder="名前" class="form-control mb-3 name" name="name" data-maxlength="255">
            <input type="text" id="inputKana" placeholder="フリガナ" class="form-control mb-3 kana" name="kana" data-maxlength="255" required>
            <input type="tel" id="inputTel" placeholder="電話番号-ハイフン不要" class="form-control mb-3 tel" name="tel" data-maxlength="11" required>
            <textarea name="info" id="inputInfo" placeholder="顧客情報" id="" cols="30" rows="10" class="form-control mb-3 info" data-maxlength="511"></textarea>
            <div class="button-wrapped">
                <button class="btn btn-primary form-control" onclick="storeMessage();">登録</button>
            </div>
        </form>
    </div>
</section>

@endsection