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

use Illuminate\Support\Facades\Route;

Route::redirect("/", "/login");

Route::group(["namespace" => "Admin", "middleware" => ["web", "IpAccess"]], function () {
    Route::get("/test", "UserController@test")->name("test");
    Route::get("/logout", "UserController@logout")->name("logout");
    Route::match(['get', 'post'], "/login", "UserController@login")->name("login");
    Route::match(['get', 'post'], "/show", "UserController@show")->name("show");
    Route::match(['get', 'post'], "/add", "UserController@add")->name("add");
    Route::match(['get', 'post'], "/edit", "UserController@edit")->name("edit");
    Route::get("/delete", "UserController@delete")->name("delete");
    Route::match(['get', 'post'], "/reset", "UserController@reset")->name("reset");
});
