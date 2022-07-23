<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'invoices', 'middleware' => 'auth'], function (){

    Route::get('all', [InvoiceController::class,'invoices'])->name('invoices.all');
    Route::post('store', [InvoiceController::class,'store'])->name('invoices.store');
    Route::get('create', [InvoiceController::class,'create'])->name('invoices.create');
    Route::get('details/show/{id}', [InvoiceController::class,'details'])->name('invoices.details.show');


});



Route::group(['prefix' => 'clients', 'middleware' => 'auth'], function (){

    Route::get('index', [ClientController::class,'index'])->name('clients.index');
    Route::get('create', [ClientController::class,'create'])->name('clients.create');
    Route::post('store', [ClientController::class,'store'])->name('clients.store');
    Route::get('edit/{id}', [ClientController::class,'edit'])->name('clients.edit');
    Route::put('update/{id}', [ClientController::class,'update'])->name('clients.update');
    Route::get('delete/{id}', [ClientController::class,'delete'])->name('clients.delete');



});


Route::group(['prefix' => 'products', 'middleware' => 'auth'], function (){

    Route::get('index', [ProductController::class,'index'])->name('products.index');
    Route::get('create', [ProductController::class,'create'])->name('products.create');
    Route::post('store', [ProductController::class,'store'])->name('products.store');
    Route::get('edit/{id}', [ProductController::class,'edit'])->name('products.edit');
    Route::put('update/{id}', [ProductController::class,'update'])->name('products.update');
    Route::get('delete/{id}', [ProductController::class,'delete'])->name('products.delete');



});
