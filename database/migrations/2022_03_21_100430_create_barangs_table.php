<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_barang', 200);
            $table->string('bahan', 200);
            $table->string('ukuran', 200);
            $table->string('warna', 20);
            $table->string('merk', 20);
            $table->string('harga', 200);
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
