<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepOneController;

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
    return view('layouts.master-landing');
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/businessplan',StepOneController::class);
Route::get('/download',[StepOneController::class,'download'])->name('download');
Route::get('/d',[StepOneController::class,'download'])->name('download');
