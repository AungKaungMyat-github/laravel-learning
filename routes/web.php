<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/fruits', [FruitController::class, 'index']);

Route::get('/fruits/create', [FruitController::class, 'create']);

Route::post('/fruits', [FruitController::class, 'store']);