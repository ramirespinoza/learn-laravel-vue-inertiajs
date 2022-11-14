<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TypeController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return Inertia::render('Home/Index');
})->name('home')->middleware('auth');

Route::resource('book', BookController::class)->middleware('auth');


Route::resource('type', TypeController::class)->middleware('auth');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home',function () {
    return \Illuminate\Support\Facades\Redirect::route('home');
} )->middleware('auth');
