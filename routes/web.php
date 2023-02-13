<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PlusController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile/{id}', [HomeController::class, 'profile'])->name('profile');

//Shout
Route::post('/createshout', [ShoutController::class, 'create'])->name('createshout');
Route::get('/deleteshout/{id}', [ShoutController::class, 'delete'])->name('deleteshout');

//Comment
Route::post('/createcomment', [CommentController::class, 'create'])->name('createcomment');

//Plus
Route::post('/createplus', [PlusController::class, 'create'])->name('createplus');