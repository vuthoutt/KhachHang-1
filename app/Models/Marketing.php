<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    protected  $table = 'marketing';
    public function nhan_vien(){
        return $this -> belongsTo(NhanVien::class, 'nguoi_tao');
    }
}
