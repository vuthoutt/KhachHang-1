<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function index(){
        return view('quanly.marketing.index');
    }

    public function getThem(){
        return view('quanly.marketing.add');
    }

    public function postThem(){}

    public function getSua(){
        return view('quanly.marketing.edit');
    }
    public function postSua(){}
}
