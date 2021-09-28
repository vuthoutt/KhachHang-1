<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinhLuan;

class BinhLuanController extends Controller
{
    public function index(){
        $binhluan = BinhLuan::orderby('id','asc')->get();
        return view('quanly.binhluan.index', compact('binhluan'));
    }
}
