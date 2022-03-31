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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('lol');
});

Route::get('/about', function () {
    return "<h1>About page</h1>";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "Ovo je post # $id - $name";
});

Route::get('admin/posts/example', 
    array("as" => "admin.home" , function () {
        $url = route("admin.home");

        return "this url is ". $url;
}));