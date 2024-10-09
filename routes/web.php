<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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



Route::controller(TaskController::class)->prefix('task')->group(function(){
    Route::get('/index',"index")->name('task.index');
    Route::get('/create',"create")->name('task.create');
    Route::post('/store',"store")->name('task.store');
    Route::get('/show/{id}',"show")->name('task.show');
    Route::put('/update',"update")->name('task.index');
    Route::delete('/delete',"delete")->name('task.delete');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/',"loginForm")->name('auth.login.form');
    Route::post('/login',"login")->name('auth.login');
    Route::get('/register',"registerForm")->name('auth.register.form');
    Route::post('/register',"register")->name('auth.register');
});

