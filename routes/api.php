<?php

use App\Http\Controllers\API\FunctionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profiles', [FunctionController::class, 'stock']);
Route::post('motors', [FunctionController::class, 'penjualan']);
Route::post('mobils', [FunctionController::class, 'penjualan']);


