<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;

class ThongKeController extends Controller
{
    //
    public function index() {
        // $users = User::select(\DB::raw("COUNT(*) as count"))
        //             ->whereYear('created_at', date('Y'))
        //             ->groupBy(\DB::raw("Month(created_at)"))
        //             ->pluck('count');

        // return view('', compact('users'));
        $month = ['1','2','3','4','5','6','7','8','9','10','11','12'];
        $user = [];
        foreach ($month as $key => $value) {
            $user[] = User::where(\DB::raw("Month(created_at)"),$value)->where('chuc_vu_id',7)->count();
        }
        // dd($user);
    	return view('quanly.thongke.index')->with('month',json_encode($month,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}
