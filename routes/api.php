<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('secrets', "App\Http\Controllers\SecretController@index");

Route::get('user', "App\Http\Controllers\UserController@index");