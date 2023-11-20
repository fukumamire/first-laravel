<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($text){ 
        $item = [
            'content' => 'パラメータを渡す',
            'param' => $text  
        ];
        return view('index', $item);
    }
}
