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
Route::get('dangnhap',[LoginController::class ,'login'])->name('quanly.dangnhap');

Route::get('/', [PageController::class, 'index'])->name('quanly.index');
    Route::prefix('cskh')->group(function () {
    Route::get('/', [CSKHController::class, 'index'])->name('cskh.index');

    Route::get('them', [CSKHController::class, 'getThem'])->name('cskh.getThem');
    Route::post('them', [CSKHController::class, 'postThem'])->name('cskh.postThem');

    Route::get('sua', [CSKHController::class, 'getSua'])->name('cskh.getSua');
    Route::post('sua', [CSKHController::class, 'postSua'])->name('cskh.postSua');

    Route::get('xoa', [CSKHController::class, 'getXoa'])->name('cskh.getXoa');
});

Route::prefix('marketing')->group(function () {
    Route::get('/', [MarketingController::class, 'index'])->name('marketing.index');

    Route::get('them', [MarketingController::class, 'getThem'])->name('marketing.getThem');
    Route::post('them', [MarketingController::class, 'postThem'])->name('marketing.postThem');

    Route::get('sua', [MarketingController::class, 'getSua'])->name('marketing.getSua');
    Route::post('sua', [MarketingController::class, 'postSua'])->name('marketing.postSua');

    Route::get('xoa', [MarketingController::class, 'getXoa'])->name('marketing.getXoa');
});

Route::prefix('khachhang')->group(function () {
    Route::get('/', [KhachHangController::class, 'index'])->name('khachhang.index');

});

Route::prefix('thongke')->group(function () {
    Route::get('/', [ThongKeController::class, 'index'])->name('thongke.index');
});

