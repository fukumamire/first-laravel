<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        // ビューに渡すデータを準備
        $item = [
            'content' => 'パラメータを渡す',
        ];
         // view 関数を使って 'index' ビューを表示し、$item 配列を渡す
        return view('index', $item);
    }
}
