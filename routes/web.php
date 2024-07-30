<?php

use Illuminate\Support\Facades\Route;
// use TCG\Voyager\Voyager;
use TCG\Voyager\Facades\Voyager;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Voyager\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    // Route::resource('posts', 'App\Http\Controllers\PostController');
});