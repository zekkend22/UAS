<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_gudang', function (Blueprint $table) {
            $table->increments('id_gudang');
            $table->string('gudang_kode');
            $table->string('gudang_barang');
            $table->string('gudang_jns');
            $table->string('gudang_jml');
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
        Schema::dropIfExists('db_gudang');
    }
}
