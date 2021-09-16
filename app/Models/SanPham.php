<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_pham';
    protected $fillable = [
        'diem_ban_id',
        'loai_san_pham_id',
        'nha_cung_cap_id',
        'ten',
        'ten_khong_dau',
        'hinh_anh',
        'gia_nhap',
        'gia_xuat',
        'so_luong',
        'don_vi_tinh',
        'nsx',
        'hsd',
        'trang_thai',
    ];

    public function diem_ban() {
        return $this->belongsTo(DiemBan::class, 'diem_ban_id');
    }

    public function loai_san_pham() {
        return $this->belongsTo(LoaiSanPham::class, 'loai_san_pham_id');
    }

    public function nha_cung_cap() {
        return $this->belongsTo(NhaCungCap::class, 'nha_cung_cap_id');
    }
}
