<?php

use App\Http\Controllers\CatogoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


   Route::get('/customer.create',[CustomerController::class,'create'])->name('customer.create');
   Route::post('/add-customer',[CustomerController::class,'store'])->name('add-customer');
   Route::get('/customer.index',[CustomerController::class,'index'])->name('customer.index');
   Route::get('/customer.edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
   Route::post('/customer.update/{id}',[CustomerController::class,'update'])->name('customer.update');
   Route::get('/customer.delete{id}',[CustomerController::class,'delete'])->name('customer.delete');
   Route::get('/customer.welcome',[CustomerController::class,'welcome'])->name('welcome');

   Route::get('/catogory.index',[CatogoryController::class,'index'])->name('catogory.index');
   Route::get('/catogory.create',[CatogoryController::class,'create'])->name('catogory.create');
   Route::post('/add-catogory',[CatogoryController::class,'store'])->name('add-catogory');
   Route::get('/catogory.edit/{id}',[CatogoryController::class,'edit'])->name('catogory.edit');
   Route::post('/catogory.update/{id}',[CatogoryController::class,'update'])->name('catogory.update');
   Route::get('/catogory.delete{id}',[CatogoryController::class,'delete'])->name('catogory.delete');

   Route::get('/product.index',[ProductController::class,'index'])->name('product.index');
   Route::get('/product.create',[ProductController::class,'create'])->name('product.create');
   Route::post('/product.add_product',[ProductController::class,'store'])->name('product.add_product');
   Route::get('/product.delete/{id}',[ProductController::class,'delete'])->name('product.delete');