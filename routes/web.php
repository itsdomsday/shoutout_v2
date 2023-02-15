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
Route::get('/viewshout/{id}', [HomeController::class, 'viewshout'])->name('viewshout');
Route::get('/shoutoutabout/{id}', [HomeController::class, 'shoutoutabout'])->name('shoutoutabout');
Route::get('/aboutde/{id}', [HomeController::class, 'aboutde'])->name('aboutde');


//Shout
Route::post('/post_shout', [ShoutController::class, 'post_shout'])->name('post_shout');
Route::post('/post_shoutpf', [ShoutController::class, 'post_shoutpf'])->name('post_shoutpf');
Route::get('/del_shout/{id}', [ShoutController::class, 'del_shout'])->name('del_shout');
Route::get('/del_shoutpf/{id}', [ShoutController::class, 'del_shoutpf'])->name('del_shoutpf');

//Comment
Route::post('/post_com', [CommentController::class, 'post_com'])->name('post_com');
Route::post('/post_compf', [CommentController::class, 'post_compf'])->name('post_compf');
Route::post('/post_comvs', [CommentController::class, 'post_comvs'])->name('post_comvs');
Route::get('/del_com/{id}', [CommentController::class, 'del_com'])->name('del_com');
Route::get('/del_compf/{id}', [CommentController::class, 'del_compf'])->name('del_compf');
Route::get('/del_comvs/{id}', [CommentController::class, 'del_comvs'])->name('del_comvs');

//Plus
Route::post('/plus_one', [PlusController::class, 'plus_one'])->name('plus_one');
Route::post('/plus_onepf', [PlusController::class, 'plus_onepf'])->name('plus_onepf');
Route::post('/plus_onevs', [PlusController::class, 'plus_onevs'])->name('plus_onevs');