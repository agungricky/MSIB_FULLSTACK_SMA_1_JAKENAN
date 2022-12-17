<?php

use App\Http\Controllers\Api\guruapiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('guru', [guruapiController::class, 'index']);
Route::get('guru/{id}', [guruapiController::class, 'show']);
Route::post('guru-create', [guruapiController::class, 'store']);
