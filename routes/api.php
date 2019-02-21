<?php


use Illuminate\Http\Request;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\Admin\AdminResource;


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

/**
 * ======================USER API====================
 * @return array
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return new UserResource($request->user());
});

/**
 * ======================ADMIN API====================
 * @return array
 */
Route::middleware('auth:admin')->get('/admin', function (Request $request) {
    return new AdminResource($request->user());
});

Route::post('login', 'Api\Login\LoginController@login');



/**
 * ReviewCotroller
 */
Route::group(['prefix' => 'admin'], function () {
    Route::apiResource('/manage/users', 'Api\User\UserController', [
        'as' => 'admin'
    ]);
    Route::apiResource('/manage/admins', 'Api\Admin\AdminController', [
        'as' => 'admin'
    ]);
});
