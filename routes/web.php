<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/logout',[LogoutController::class,'logout']);


Route::get('/add_topic',[AdminController::class,'add_topic']);

Route::post('/create_topic',[AdminController::class,'create_topic']);

Route::get('/delete_topic/{id}',[AdminController::class,'delete_topic']);

Route::get('/add_post',[AdminController::class,'add_post']);

Route::post('/create_post',[AdminController::class,'create_post']);

Route::get('/show_posts',[AdminController::class,'show_posts']);


