<?php
use App\Http\Middleware\checkAuth;
 
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
    return view('');
});

Route::get("/test", "TestController@index");


Route::get("/register", "registerController@create");
Route::post("/validasi", "registerController@store");
Route::get("/home", "registerController@index");