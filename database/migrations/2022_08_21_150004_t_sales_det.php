<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sales_det', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_id');
            $table->integer('barang_id');
            $table->decimal('harga_bandrol', 15, 2);
            $table->integer('qty');
            $table->decimal('diskon_pct', 15, 2)->default("0");
            $table->decimal('diskon_nilai', 15, 2)->default("0");;
            $table->decimal('harga_diskon', 15, 2);
            $table->decimal('total', 15, 2);
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
        Schema::dropIfExists('t_sales_det');
    }
};
