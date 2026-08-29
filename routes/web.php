<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/abouts', [AdminController::class, 'about'])->name('abouts');

// Product Management System Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/change/{id}', [ProductController::class, 'changeStatus'])->name('products.change');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');