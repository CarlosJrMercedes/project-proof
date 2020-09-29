<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', [CustomerController::class, 'index']);
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::POST('customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::PUT('customer/{id}/update', [CustomerController::class, 'update'])->name('customer.update');
Route::GET('customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::DELETE('customer/{id}/destroy', [CustomerController::class, 'destroy'])->name('customer.destroy');


// Route::resource('customers',);
// Route::resource('caso', [CustomerController::class]);
