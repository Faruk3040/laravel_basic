<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserAuth;
use App\Http\Middleware\ageCheck;
use Illuminate\Support\Facades\App;


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
Route::view('users', 'users')->middleware('protectedPage');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');

//Route::group(['middleware'=>['protectedPage']], function(){
  //  Route::view('users', 'users');
//});

//Route::get('/users',[UsersController::class,'index']);

Route::put("users",[UsersController::class,'testRequest']);
Route::view('login', 'users');

//Route::view('login', 'login');
Route::post("user",[UserAuth::class,'userLogin']);
//Route::view('profile', 'profile');

//Route::get('/login', function () {
  //  if(session()->has('user'))
 //   {
 //      return redirect('profile');
 //   }
  //  return view('login');
//});


Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});


Route::view('add', 'add');
Route::post('addmember',[AddMember::class,'add']);

Route::view('upload', 'upload');
Route::post('upload',[UploadController::class,'index']);

//Route::view('profile', 'profile');


Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
});
