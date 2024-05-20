<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WholesalerController;
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
Route::controller(SupplierController::class)->group(function(){
    Route::get('/dostawcy','index')->name('suppliers.index');
    Route::get('/dostawcy/{id}/edit', 'edit')->name('suppliers.edit');
});
