<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WholesalerController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\AuthController;
use App\Models\supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(WholesalerController::class)->group(function(){
    Route::get('/hurtownia','index')->name('hurtownia.index');
});
Route::controller(ShopController::class)->group(function(){
    Route::get('/shops','index')->name('shops.index')->middleware('auth');
    Route::get('/shops/create','create')->name('shops.create')->middleware('auth');
    Route::get('/shops/{id}/edit', 'edit')->name('shops.edit')->middleware('auth');
    Route::put('/shops/{id}', 'update')->name('shops.update')->middleware('auth');
    Route::post('/shops', 'store')->name('shop.store');
    Route::delete('/shops/{shop}', 'destroy')->name('shops.destroy');
});
Route::controller(supplierController::class)->group(function(){
    Route::get('/suppliers/create','create')->name('suppliers.create')->middleware('auth');
    Route::get('/suppliers','index')->name('suppliers.index')->middleware('auth');
    Route::get('/suppliers/{id}/edit', 'edit')->name('suppliers.edit')->middleware('auth');
    Route::put('/suppliers/{id}', 'update')->name('suppliers.update')->middleware('auth');
    Route::post('/suppliers', 'store')->name('suppliers.store');
    Route::delete('/suppliers/{supplier}', 'destroy')->name('suppliers.destroy');
});

Route::controller(employeeController::class)->group(function(){
    Route::get('/employees','index')->name('employees.index')->middleware('auth');
    Route::get('/employees/{id}/edit', 'edit')->name('employees.edit')->middleware('auth');
    Route::put('/employees/{id}', 'update')->name('employees.update')->middleware('auth');
    Route::delete('/employees/{employee}', 'destroy')->name('employees.destroy');
});

Route::controller(orderController::class)->group(function(){
    Route::get('/orders','index')->name('orders.index')->middleware('auth');
    Route::get('/orders/{id}/edit', 'edit')->name('orders.edit')->middleware('auth');
    Route::put('/orders/{id}', 'update')->name('orders.update')->middleware('auth');

});
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});
