<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileuserController;

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

Route::get('allUsers',[MobileuserController::class,'getAllUsers']);
Route::post('createUser',[MobileuserController::class,'addUser']);
Route::get('ByUserName/{username}',[MobileuserController::class,'getuserbyUserName']);
Route::get('ByUserEmail/{email}',[MobileuserController::class,'getuserbyUserEmail']);
Route::get('ByUserNo/{number}',[MobileuserController::class,'getuserbyMobileNo']);
Route::delete('delByUserName/{username}',[MobileuserController::class,'deluserbyUserName']);
Route::delete('delByUserEmail/{email}',[MobileuserController::class,'deluserbyUserEmail']);
Route::delete('delByUserNo/{number}',[MobileuserController::class,'deluserbyMobileNo']);
