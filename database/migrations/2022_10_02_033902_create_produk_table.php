<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')->on('kategori')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->char('namaProduk', 20);
            $table->integer('beratProduk');
            $table->date('tanggalProduksi');
            $table->decimal('hargaProduk', $precision = 10, $scale = 2);
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
        Schema::dropIfExists('produk');
    }
}
