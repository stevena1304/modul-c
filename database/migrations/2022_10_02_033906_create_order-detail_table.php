<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order-detail', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlahBarang');
            $table->decimal('totalHarga', $precision = 11, $scale = 2);
            $table->BigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('order')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->BigInteger('produk_id')->unsigned();
            $table->foreign('produk_id')->references('id')->on('produk')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('order-detail');
    }
}
