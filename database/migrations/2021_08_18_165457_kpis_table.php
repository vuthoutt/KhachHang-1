<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kpi', function (Blueprint $table) {
            $table->id();
            $table->integer('nhan_vien_id');
            $table->decimal('kpi_muc_tieu')->default(0);
            $table->decimal('kpi_dat_duoc')->default(0);
            $table->date('ngay_dat_muc_tieu');
            $table->integer('trang_thai')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('kpi');
    }
}
