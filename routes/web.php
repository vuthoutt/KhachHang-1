<?php
namespace App\Http\Controllers;

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
Route::get('/', [LoginController::class ,'login'])->name('quanly.dangnhap');
Route::post('/', [LoginController::Class, 'postLogin'])->name('quanly.postDangnhap');

Route::prefix('admin')->middleware('quanly.login')->group(function(){

Route::get('index', [PageController::class, 'index'])->name('quanly.index');
    Route::prefix('cskh')->group(function () {
    Route::get('/', [CSKHController::class, 'index'])->name('cskh.index');

    Route::get('them', [CSKHController::class, 'getThem'])->name('cskh.getThem');
    Route::post('them', [CSKHController::class, 'postThem'])->name('cskh.postThem');

    Route::get('sua/{id}', [CSKHController::class, 'getSua'])->name('cskh.getSua');
    Route::post('sua/{id}', [CSKHController::class, 'postSua'])->name('cskh.postSua');

    Route::get('xoa/{id}', [CSKHController::class, 'getXoa'])->name('cskh.getXoa');
});

Route::prefix('marketing')->group(function () {
    Route::get('/', [MarketingController::class, 'index'])->name('marketing.index');

    Route::get('them', [MarketingController::class, 'getThem'])->name('marketing.getThem');
    Route::post('them', [MarketingController::class, 'postThem'])->name('marketing.postThem');

    Route::get('sua/{id}', [MarketingController::class, 'getSua'])->name('marketing.getSua');
    Route::post('sua/{id}', [MarketingController::class, 'postSua'])->name('marketing.postSua');

    Route::get('xoa/{id}', [MarketingController::class, 'getXoa'])->name('marketing.getXoa');
});

Route::prefix('khachhang')->group(function () {
    Route::get('/', [KhachHangController::class, 'index'])->name('khachhang.index');
    Route::get('thuong', [KhachHangController::class, 'khachthuong'])->name('khachthuong.index');
    Route::get('vip', [KhachHangController::class, 'khachvip'])->name('khachvip.index');
    
});

Route::prefix('binhluan')->group(function () {
    Route::get('/', [BinhLuanController::class, 'index'])->name('binhluan.index');
    Route::get('sua', [BinhLuanController::class, 'getSua'])->name('binhluan.getSua');
    Route::post('sua', [BinhLuanController::class, 'postSua'])->name('binhluan.postSua');
    Route::get('xoa', [BinhLuanController::class, 'getXoa'])->name('bnhluan.getXoa');
    
});

Route::prefix('thongke')->group(function () {
    Route::get('/', [ThongKeController::class, 'index'])->name('thongke.index');
});
});

Route::get('dangky', [TheKhachHangController::class, 'dangky'])->name('thakhachhang.dangky');
Route::post('dangky', [TheKhachHangController::class, 'postDangky'])->name('thekhachhang.postDangky');
Route::get('dangnhap', [TheKhachHangController::class, 'dangnhap'])->name('thekhachhang.dangnhap');
Route::post('dangnhap', [TheKhachHangController::class, 'postDangnhap'])->name('thekhachhang.postDangnhap');

Route::prefix('thekhachhang')->group(function () {
    Route::get('/', [TheKhachHangController::class, 'index'])->name('thekhachang.index');
    Route::get('taikhoan', [TheKhachHangController::class, 'taikhoan'])->name('thekhachhang.taikhoan');
    
});

