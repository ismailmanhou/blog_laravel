<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



//route parameter

Auth::routes(['verify'=>true]);

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/dashboard', function(){

    return 'dashboard';
});