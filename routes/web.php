<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
});

Route::resource('book', BookController::class);


Route::get('type', [TypeController::class, 'index'])->name('type.index');
Route::get('type', [TypeController::class, 'create'])->name('type.create');
Route::post('type', [TypeController::class, 'store'])->name('type.store');
Route::get('type', [TypeController::class, 'edit'])->name('type.edit');
Route::put('type', [TypeController::class, 'update'])->name('type.update');
Route::delete('type', [TypeController::class, 'destroy'])->name('type.destroy');
