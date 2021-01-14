<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

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
Route::get('api/user/get-user-rooms/{user_id}', [BackendController::class, 'getUserRooms'])->name('get-user-rooms');
Route::get('api/room/create-room/{roomName}', [BackendController::class, 'createRoom'])->name('createRoom');
Route::get('api/room/add-food-to-room/{room_id}/{food_id}', [BackendController::class, 'addFoodToRoom'])->name('addFoodToRoom');
Route::get('api/room/delete/{room_id}/{user_id}', [BackendController::class, 'deleteUserFromRoom'])->name('deleteUserFromRoom');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Auth::routes();
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('api/room/invite/{room_id}/{user_id}', [BackendController::class, 'inviteUserToRoom'])->name('inviteUserToRoom');
Route::get('/new', [App\Http\Controllers\HomeController::class, 'controllerMethod'])->name('welcome');