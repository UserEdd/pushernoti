<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/pusher', function () {
    return view('pusher');
});

Route::get('/pusher2', function () {
    return view('pusher2');
});

Route::get('/pusher3', function () {
    return view('pusher3');
});

Route::get('/user/post',[PostController::class,'showForm']);
Route::Post('/user/postsave',[PostController::class,'save'])->name('post.save');
