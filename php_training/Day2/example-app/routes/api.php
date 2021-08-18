<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("allUsers",[UserController::class,'getAllUsers']);//....... get all users
Route::post("createUser",[UserController::class,'addUser']);//....... create a user
Route::delete('/delete/{id}',[UserController::class, 'deleteuser']); //....... delete user by id
Route::get('/members/{id}',[UserController::class, 'getuserbyid']); //....... fetch user by id
