<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('id_tek');
            $table->string('id_sport');
            $table->string('id_oto');
            $table->string('id_food');
            $table->string('id_finance');
            $table->string('id_enter');
            $table->string('id_travel');
            $table->string('id_health');
            $table->string('id_edu');
            $table->string('id_properti');
            $table->string('id_ekonomi');
            $table->string('id_nas');
            $table->string('id_inter');
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
        Schema::drop('news');
    }
}
