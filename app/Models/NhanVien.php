<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table = 'nhan_vien';
    protected $fillable = [
        'user_id',
        'phong_ban_id',
        'chuc_vu_id',
        'diem_ban_id',
        'ma_nv',
        'ten',
        'anh',
        'gioi_tinh',
        'ngay_sinh',
        'dia_chi',
        'sdt',
        'cccd',
        'trang_thai',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function phong_ban() {
        return $this->belongsTo(PhongBan::class, 'phong_ban_id');
    }

    public function chuc_vu() {
        return $this->belongsTo(ChucVu::class, 'chuc_vu_id');
    }

    public function diem_ban() {
        return $this->belongsTo(DiemBan::class, 'diem_ban_id');
    }

    public function ngay_cong() {
        return $this->hasMany(NgayCong::class, 'nhan_vien_id');
    }

    public function cskh(){
        return $this -> hasMany(CSKH::class, 'nguoi_tao');
    }

    public function marketing(){
        return $this -> hasMany(Marketing::class, 'nguoi_tao');
    }
}
