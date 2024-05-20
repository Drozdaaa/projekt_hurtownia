<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WholesalerController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\orderController;
use App\Models\supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(WholesalerController::class)->group(function(){
    Route::get('/hurtownia','index')->name('hurtownia.index');
});
Route::controller(ShopController::class)->group(function(){
    Route::get('/sklepy','index')->name('shops.index');
    Route::get('/shops/{id}/edit', 'edit')->name('shops.edit');
    Route::put('/shops/{id}', 'update')->name('shops.update');
});
Route::controller(supplierController::class)->group(function(){
    Route::get('/suppliers','index')->name('suppliers.index');
    Route::get('/suppliers/{id}/edit', 'edit')->name('suppliers.edit');
    Route::put('/suppliers/{id}', 'update')->name('suppliers.update');
});

Route::controller(employeeController::class)->group(function(){
    Route::get('/employees','index')->name('employees.index');
    Route::get('/employees/{id}/edit', 'edit')->name('employees.edit');
    Route::put('/employees/{id}', 'update')->name('employees.update');
});

Route::controller(orderController::class)->group(function(){
    Route::get('/orders','index')->name('orders.index');
    Route::get('/orders/{id}/edit', 'edit')->name('orders.edit');
    Route::put('/orders/{id}', 'update')->name('orders.update');
});
