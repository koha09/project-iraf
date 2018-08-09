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
    return view('home');
});
Route::get('/subscribe', function () {
    return view('subscribe');
});
Route::get('/edition/{part_id}', function (int $part_id) {
    return view("edition",compact("part_id"));
});

Route::get('/edition/post/{post_id}', function (int $post_id) {
    return view("post",compact("post_id"));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});