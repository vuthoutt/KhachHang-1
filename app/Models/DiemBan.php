<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiemBan extends Model
{
    use HasFactory;

    protected $table = 'diem_ban';
    protected $fillable = [
        'ten',
        'dia_chi',
    ];

    public function nhan_vien() {
        return $this->hasMany(NhanVien::class, 'diem_ban_id');
    }

    public function san_pham() {
        return $this->hasMany(SanPham::class, 'diem_ban_id');
    }
}
