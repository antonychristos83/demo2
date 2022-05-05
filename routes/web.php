<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostContoller;
use App\Http\Controllers\AuthController;
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
    return view('add-post');
});

Route::get('/add-post',[PostContoller::class,'create'])->name('post.add');
Route::post('/add-post',[PostContoller::class,'store'])->name('post.save');
Route::get('/list_post',[PostContoller::class,'show'])->name('post.list');
Route::get('/edit-post/{id}',[PostContoller::class,'edit'])->name('post.edit');
Route::post('/update-post',[PostContoller::class,'update'])->name('post.update');
Route::get('/delete-post/{id}',[PostContoller::class,'destroy'])->name('post.delete');
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
