<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\UserController;
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

Route::post('user/get-user-rooms/{user_id}', [BackendController::class, 'getUserRooms'])->name('get-user-rooms');
Route::post('room/create-room/{roomName}', [BackendController::class, 'createRoom'])->name('createRoom');
Route::post('room/add-food-to-room/{room_id}/{food_id}', [BackendController::class, 'addFoodToRoom'])->name('addFoodToRoom');
Route::post('room/delete/{room_id}/{user_id}', [BackendController::class, 'deleteUserFromRoom'])->name('deleteUserFromRoom');
Route::post('user/get-user-ratings/{user_id}', [BackendController::class, 'getUserRatings'])->name('getUserRatings');
Route::post('user/add-rating/{room_id}/{food_id}/{user_id}/{rate}', [BackendController::class, 'addRatings'])->name('addRatings');
Route::post('room/show-rate/{room_id}', [BackendController::class, 'showRoomRate'])->name('showRoomRate');
Route::post('room/invite/{room_id}/{user_id}', [BackendController::class, 'inviteUserToRoom'])->name('inviteUserToRoom');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[UserController::class, 'register']);
Route::post('profile',[UserController::class, 'register']);

Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});
