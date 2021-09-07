<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\User;
Route::get('/', function () {
    return view('welcome');
});
Route::get('foo',function (){
    return "hello world";
});

Route::get('posts/{post}/comments/{comment}',function ($post,$comment){
    return 'post id:'.$post.',comment id:'.$comment;
});
Route::get('user/{id}',[User::class,'show']);
Route::get('hello',function (){
    return [
        'name'=>1,
        'id'=>2,
        'age'=>3
    ];
});
Route::get('show/{name}',function ($name){
    return url("/hello/{$name}");
});
