<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DiemBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('diem_ban')->insert([
            'ten' => 'Vinmart+ Triều Khúc',
            'dia_chi' => 'số 9 Phố Triều Khúc, Thanh Xuân Nam, Thanh Xuân, Hà Nội, Việt Nam',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('diem_ban')->insert([
            'ten' => 'Vinmart Đại La',
            'dia_chi' => '163A Đại La, Đồng Tâm, Hai Bà Trưng, Hà Nội, Việt Nam',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
