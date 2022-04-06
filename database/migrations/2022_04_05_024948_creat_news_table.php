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
            $table->string('id_tek')->nullable();
            $table->string('id_sport')->nullable();
            $table->string('id_oto')->nullable();
            $table->string('id_food')->nullable();
            $table->string('id_finance')->nullable();
            $table->string('id_enter')->nullable();
            $table->string('id_travel')->nullable();
            $table->string('id_health')->nullable();
            $table->string('id_edu')->nullable();
            $table->string('id_properti')->nullable();
            $table->string('id_ekonomi')->nullable();
            $table->string('id_nas')->nullable();
            $table->string('id_inter')->nullable();
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
