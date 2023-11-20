<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ↓ブラウザに画面表示をしよう:route編
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [TestController::class, 'index']);
// ↓ブラウザに画面表示をしよう:controller編
// Route::get('/test', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);

// Route::get('/test/{text}', [TestController::class, 'index']);

// 問２
Route::get('/test/{greeting?}', function($greeting = 'Goodmorning') {
  return $greeting . '=おはようございます';
});