<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSKHController extends Controller
{
    public function index(){
        return view('quanly.cskh.index');
    }

    public function getThem(){
        return view('quanly.cskh.add');
    }

    public function postThem(){}

    public function getSua(){
        return view('quanly.cskh.edit');
    }
    public function postSua(){}
}
