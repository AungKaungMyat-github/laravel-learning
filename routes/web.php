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
    return view('test', [
        'script' => "<script> alert('you are hacked')</script>"
    ]);
});

Route::get('/fruits', [FruitController::class, 'index']);
Route::get('/fruits/create', [FruitController::class, 'create']);
Route::get('/fruits/{id}', [FruitController::class, 'show']);
Route::post('/fruits', [FruitController::class, 'store']);

Route::get('/fruits/{id}/edit', [FruitController::class, 'edit']);
Route::patch('/fruits/{id}', [FruitController::class, 'update']);


Route::delete('/fruits/{id}', [FruitController::class, 'destroy']);
