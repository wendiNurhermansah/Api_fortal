<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatEntertaimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertaiments', function (Blueprint $table) {
            $table->id();
            $table->integer('id_categori');
            $table->string('judul');
            $table->string('isi_portal');
            $table->string('penulis');
            $table->string('hari');
            $table->string('tgl');
            $table->string('gambar');
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
        Schema::drop('entertaiments');
    }
}
