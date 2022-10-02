<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date('orderDate');
            $table->BigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customer')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->BigInteger('kirim_id')->unsigned();
            $table->foreign('kirim_id')->references('id')->on('kirim')
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
        Schema::dropIfExists('order');
    }
}
