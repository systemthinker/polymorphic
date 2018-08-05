<?php

use App\Product;
use App\Staff;
use App\User;
use App\Photo;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', 'PostController');
Route::auth();

Route::get('/home', 'PostController@create');
