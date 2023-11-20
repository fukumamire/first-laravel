<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index($text){ 
    //     $item = [
    //         'content' => 'パラメータを渡す',
    //         'param' => $text  
    //     ];
    //     return view('index', $item);
    // }
    // ↓ブラウザに画面表示をしよう:view編
    public function index(){
        $item = [
            'content' => '本文'
        ];
        return view('index', $item);
    }
}
