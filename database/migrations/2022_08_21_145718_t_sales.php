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
        Schema::create('t_sales', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->datetime('tgl');
            $table->integer('cust_id');
            $table->decimal('subtotal', 15, 2);
            $table->decimal('diskon', 15, 2)->nullable();
            $table->decimal('ongkir', 15, 2)->nullable();
            $table->decimal('total_bayar', 15, 2);
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
        Schema::dropIfExists('t_sales');
    }
};
