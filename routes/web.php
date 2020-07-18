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

Route::get('/', function () {
    return "show all posts";
});


Route::get('/posts/create', function () {
    return "create page";
});
Route::post('/posts', function () {
    return "store data";
});
Route::get('/posts/{title}', function ($title) {
    return "show single post";
});
Route::get('/posts/{title}/edit', function ($title) {
    return "edit post";
});
Route::put('/posts/{title}', function ($title) {
    return "save updated post";
});
Route::delete('/posts/{title}', function ($title) {
    return "delete post";
});



