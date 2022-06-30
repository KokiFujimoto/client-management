<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewHome()
    {
        return view('home');
    }

    /**
     * 新規登録画面遷移
     */
    public function viewStore() {

        return view('store');
    }

    /**
     * 詳細画面遷移
     */
    public function viewDetail() {

        return view('detail');
    }
}
