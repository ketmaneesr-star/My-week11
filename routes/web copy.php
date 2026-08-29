<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ยินดีต้อนรับเข้าสู่เว็บไซต์ของฉัน <a href='" . route('login') . "'>Login</a>";
});

Route::get('about', function () {
    return "เกี่ยวกับเรา";
});

Route::get('blog/{id}', function ($id) {
    return "บทความทั้งหมด". $id;
});

Route::get('admin/user/jack', function () {
    
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login');

Route::fallback(function () {
    return "ไม่พบหน้าเว็บที่คุณต้องการ";
});

Route::get('users/{id}', function ($id) {
    return "ข้อมูลของรหัสผู้ใช้: ";
});

Route::get("blog/delete/{id}", [AdminController::class, 'delete']); 
