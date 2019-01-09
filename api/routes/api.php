<?php

use Illuminate\Http\Request;
Use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('get/designation','HomeController@designation');
Route::post('get/roles','HomeController@jobRoles');
Route::post('get/companies','HomeController@companies');
Route::post('get/company','HomeController@company');
Route::post('get/categories','HomeController@categories');
Route::post('get/vacancy','HomeController@vacancy');
Route::post('get/vacancies','HomeController@vacancies');
Route::post('get/questions','HomeController@questions');

Route::post('user/details', 'HomeController@userdetails');
Route::post('user/login','HomeController@login');
Route::post('user/signup','HomeController@signup' );
Route::post('user/testscore','HomeController@testscore' );