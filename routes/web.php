<?php

use Illuminate\Support\Facades\Route;

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
    return view('gtc');
});
Route::get('/luckyclick', function () {
    return view('luckyclick');
});
Route::get('/pkd', function () {
    return view('pkd');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dekstopgtc', [App\Http\Controllers\HomeController::class, 'index2'])->name('dekstopgtc');
