<?php

use App\Http\Controllers\api\v1\RoomController;
use App\Http\Controllers\api\v1\UserController;
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

Route::prefix('v1')->group(function () {
    Route::get('/test', function () {
        return "OK";
    });

    Route::post('token', [RoomController::class, 'getToken']);

    Route::post('/register', [UserController::class, 'register']);

    Route::post('/login', [UserController::class, 'login']);

    Route::get('/get_room_list', [RoomController::class, 'getRoomList']);
});
