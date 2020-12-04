<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Retailers;
use App\Models\User;

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

Route::resource('retailers', '\App\Http\Controllers\RetailersController');

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
    Route::post('signin', '\App\Http\Controllers\Auth\SignInController');
    Route::post('signout', '\App\Http\Controllers\Auth\SignOutController');

    Route::get('me', '\App\Http\Controllers\Auth\MeController');
});

Route::resource('users', '\App\Http\Controllers\usersController');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/