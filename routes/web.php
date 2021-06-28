<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\ageCheck;


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

//Route::get('/{name}', function ($name) {
//    return view('user',['name'=>$name]);
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});
//Route::get('/user/{name}', function ($name) {
//    return view('user',['name'=>$name]);
//});
//Route::get('/about', function () {
//    return view('about');
//});

Route::view('about', 'about');
Route::view('contact', 'contact');

//Route::get('/users/{name}',[UsersController::class,'index']);
//Route::get('/users',[UsersController::class,'loadview']);
//Route::post('/users',[UsersController::class,'getData']);
//Route::view('login', 'users');

//Route::view('user', 'user');
Route::view('users', 'users');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');