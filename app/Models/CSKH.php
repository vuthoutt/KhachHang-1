<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSKH extends Model
{
    use HasFactory;
    protected $table = 'cskh';
    public function nhan_vien(){
        return $this -> belongsTo(NhanVien::class, 'nguoi_tao');
    }
}
