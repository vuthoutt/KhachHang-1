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
            'user_id' => 0,
            'ma_kh' => 'MKH1',
            'ten' => 'Nguyễn Khắc Hiếu',
            'gioi_tinh' => 1,
            'ngay_sinh' => \Carbon\Carbon::now(),
            'dia_chi' => 'Thanh Hóa',
            'sdt' => '0123456789',
            'tich_diem' => 100,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('khach_hang')->insert([
            'user_id' => 0,
            'ma_kh' => 'MKH2',
            'ten' => 'Nguyễn Thị Phượng',
            'gioi_tinh' => 2,
            'ngay_sinh' => \Carbon\Carbon::now(),
            'dia_chi' => 'Bắc Ninh',
            'sdt' => '024683579',
            'tich_diem' => 50,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('khach_hang')->insert([
            'user_id' => 0,
            'ma_kh' => 'MKH3',
            'ten' => 'Vũ Văn Thơ',
            'gioi_tinh' => 1,
            'ngay_sinh' => \Carbon\Carbon::now(),
            'dia_chi' => 'Thái Bình',
            'sdt' => '0246835413',
            'tich_diem' => 30,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
