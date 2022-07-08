<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use Illuminate\Pagination\Paginator;

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
        // 顧客情報を取得
        $clients = Client::oldest()->paginate(35);

        if (count($clients) <= 0) {
            $clients = '';
        }

        return view('home', compact('clients'));
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
    public function viewDetail($id) {

        // 選択した顧客データを取得
        $client = Client::where('id', $id)->first();
        
        return view('detail', compact('client'));
    }
}
