<?php

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
Route::get('/user',"UserController@index");
Route::get('/user/user',"UserController@user");
Route::get('/hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});
//中间件
Route::get('/test/mid/{param}',"TestController@mid")->middleware('mid');
//csrf
Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});

Route::post('hello_from_form', function (){
    return 'hello laravel!';
});
//request
Route::get('/test/request',"TestController@request");