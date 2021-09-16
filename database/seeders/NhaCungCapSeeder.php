<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công ty CP thực phẩm Anta',
            'sdt' => '096 422 12 51',
            'dia_chi' => 'Số 312 Chiến Thắng, P. Văn Quán, Hà Đông, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Nhà cung cấp thực phẩm đông lạnh toàn quốc',
            'sdt' => '0123456789',
            'dia_chi' => 'Ng. 750 Đường Kim Giang, Thanh Liệt, Thanh Trì, Hà Nội 10000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Nhà Cung Cấp Thực Phẩm Sạch PhongLinhFood',
            'sdt' => '0334 268 657',
            'dia_chi' => 'Kiot 68, CT10B Chung Cư Đại Thanh, Thanh Trì, Hà Nội 100000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Thực Phẩm An Phát - Thịt Bò Nhập Khẩu',
            'sdt' => '0392 164 697',
            'dia_chi' => 'Khu Đô Thị Mới, Hoàng Mai, Hà Nội 10000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'General Foods Vietnam JSC',
            'sdt' => '097 219 22 22',
            'dia_chi' => '68 Ngụy Như Kon Tum, Nhân Chính, Thanh Xuân, Hà Nội 10000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công ty TNHH Công nghệ Sản xuất thực phẩm AOKI',
            'sdt' => '024 3724 6417',
            'dia_chi' => 'ngõ 25A Lê Văn Lương, Nhân Chính, Cầu Giấy, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công ty TNHH Công nghệ Thực phẩm Đồ uống PCI',
            'sdt' => '096 666 66 66',
            'dia_chi' => 'Kiot số 2 Tầng 1 TMDV B (B1, B2, DV)-CT2 (Twin Tower) KĐTM Tây Nam hồ Linh Đàm, Hà Nội 100000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công Ty Cổ Phần Nước Khoáng Bình Minh',
            'sdt' => '024 3323 4284',
            'dia_chi' => 'Tòa nhà Machinco, 10 Trần Phú, Hà Đông, Hà Nội 100000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'CTY TNHH TM DV NUOC KHOANG MINH QUAN',
            'sdt' => '096 322 23 29',
            'dia_chi' => '12A -TT3, P. Văn Quán, Hà Đông, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công Ty TNHH Thực Phẩm & Đồ Uống Sạch Việt Nam',
            'sdt' => '091 484 47 66',
            'dia_chi' => '156/1, Chiến Thắng, Xã Tân Triều, Huyện Thanh Trì, Thành Phố Hà Nội, Tân Triều, Thanh Trì, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Vinamilk Hà Nội',
            'sdt' => '024 3724 6019',
            'dia_chi' => '521 Kim Mã, Ngọc Khánh, Ba Đình, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'TH True Milk',
            'sdt' => '1800 545440',
            'dia_chi' => 'tầng 2 tòa nhà Bắc Á số, 9 Đào Duy Anh, Phương Mai, Đống Đa, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công Ty Thực Phẩm Richy Miền Bắc',
            'sdt' => '0893388476',
            'dia_chi' => 'Tự Do, Đan Phượng, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công Ty Cp Bánh Kẹo Mứt Hà Nội',
            'sdt' => '024 3835 0006',
            'dia_chi' => '107 Ngụy Như Kon Tum, Nhân Chính, Thanh Xuân, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công ty Cổ phần bánh kẹo Hải Hà',
            'sdt' => '024 3863 2041',
            'dia_chi' => '25-27 Trương Định, Hai Bà Trưng, Hà Nội 100000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công Ty Cp Chế Biến Thực Phẩm Kinh Đô Miền Bắc',
            'sdt' => '024 3863 2042',
            'dia_chi' => '34 Láng Hạ, Đống Đa, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Rau FVF - Công ty CP Sản Xuất và Cung Ứng Rau Quả Sạch Quốc Tế - Tập đoàn TH',
            'sdt' => '024 3791 9666',
            'dia_chi' => '34 Hoàng Quốc Việt, Nghĩa Đô, Cầu Giấy, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Nông Sản Dũng Hà',
            'sdt' => '024 6658 8556',
            'dia_chi' => 'A11 Ngõ 100 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội 150000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        \DB::table('nha_cung_cap')->insert([
            'ten' => 'Công Ty Tnhh Thực Phẩm Hoàng Đông',
            'sdt' => '024 2218 2181',
            'dia_chi' => '94 Trần Quý Cáp, Văn Chương, Đống Đa, Hà Nội',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
