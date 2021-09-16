<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('khach_hang')->insert([
            'user_id' => 7,
            'ma_kh' => 'MKH1',
            'ten' => 'Nguyễn Văn A',
            'gioi_tinh' => 1,
            'ngay_sinh' => \Carbon\Carbon::now(),
            'dia_chi' => 'Thanh Xuân, Hà Nội',
            'sdt' => '0123456789',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
