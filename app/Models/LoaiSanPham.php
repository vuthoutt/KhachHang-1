<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    use HasFactory;

    protected $table = 'loai_san_pham';
    protected $fillable = [
        'ten',
        'ten_khong_dau',
    ];

    public function san_pham() {
        return $this->hasMany(SanPham::class, 'loai_san_pham_id');
    }
}
