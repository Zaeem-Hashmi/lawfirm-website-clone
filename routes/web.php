<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\login;
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
    return view('index');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect("/login");
});
Route::post("contactUs",[contactController::class,"add"]);
Route::get("admin",[adminController::class,"list"]);
Route::view("login","login");
Route::post("check",[login::class,"check"]);