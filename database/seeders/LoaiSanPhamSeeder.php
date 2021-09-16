<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Thịt - Hải sản - Trứng',
            'ten_khong_dau' => 'thit-hai-san-trung',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Rau - Củ - Trái cây',
            'ten_khong_dau' => 'rau-cu-trai-cay',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Dầu ăn - Gia vị - Đồ khô',
            'ten_khong_dau' => 'dau-an-gia-vi-do-kho',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Thực phẩm đông lạnh/ Chế biến sẵn',
            'ten_khong_dau' => 'thuc-pham-dong-lanh-che-bien-san',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Sữa - Sản phẩm từ sữa',
            'ten_khong_dau' => 'sua-san-pham-tu-sua',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Đồ uống - Giải khát',
            'ten_khong_dau' => 'do-uong-giai-khat',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Bánh kẹo - Đồ ăn vặt',
            'ten_khong_dau' => 'banh-keo-do-an-vat',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Hóa phẩm - Giấy',
            'ten_khong_dau' => 'hoa-pham-giay',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Đồ dùng gia đình',
            'ten_khong_dau' => 'do-dung-gia-dinh',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('loai_san_pham')->insert([
            'ten' => 'Chăm sóc cá nhân',
            'ten_khong_dau' => 'cham-soc-ca-nhan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
