@extends('layouts.app')

@section('title', '詳細ページ')

@section('content')

<section class="client-store">
    <div class="form-group">
        <form action="" class="client">
            <input type="text" class="form-control name" name="name" required>
            <input type="text" class="form-control kana" name="kana" required>
            <input type="text" class="form-control tel" name="tel" required>
            <textarea name="info" id="" cols="30" rows="10" class="form-control info"></textarea>
            <button class="btn btn-primary form-control">登録</button>
        </form>
    </div>
</section>

@endsection