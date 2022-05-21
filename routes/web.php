<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeCarController;
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
    return view('welcome');
});

Route::resource('/product', ProductController::class);
Route::resource('/transaction', TransactionController::class);
Route::resource('/typecar', TypeCarController::class);
Route::resource('/user', UserController::class);
Route::get('typecar/user', [TypeCarController::class, 'user']);
Route::resource('/income', IncomeController::class);
Route::get('/transaction/detail/{nota}', [TransactionController::class, 'detail']);
Route::get('transaction/income/{nota}', [TransactionController::class, 'income']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
