<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * 
     * 新規顧客登録
     */
    public function store(Request $request) {

        // バリデーション
        $request->validate([
            'name' => 'string|max:255|required',
            'kana' => 'string|max:255|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|required',
            'tel'  => 'digits_between:10,11',
            'info' => 'string|max:511|required',
        ]);

        // フォームの内容を登録
        $client = new Client();

        $form = $request->all();

        unset($form['_token']);

        $client->fill($form)->save();

        return view('store');
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     * 
     * 編集した内容を保存
     */
    public function update(Request $request, $id) {

        // バリデーション
        $request->validate([
            'name' => 'string|max:255|required',
            'kana' => 'string|max:255|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|required',
            'tel'  => 'digits_between:10,11',
            'info' => 'string|max:511|required',
        ]);

        // 更新対象を呼び出し
        $client = Client::where('id', $id)->first();

        // フォームを取得
        $form = $request->all();
        unset($form['_token']);

        // 更新処理
        $client->fill($form)->update();

        return view('detail', compact('client'));
    }

    /**
     * @param $id
     * @return Response
     * 
     * 削除処理
     */
    public function delete($id) {

        // 削除対象を取得して削除
        Client::where('id', $id)->delete();

        return redirect('/home');
    }
}
