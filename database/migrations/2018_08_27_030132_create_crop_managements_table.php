<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('crop_name');
            $table->string('season_name');
            $table->string('process');
            $table->string('season manager');
            $table->date('stated date');
            $table->date('end date');
            $table->string('description');
            $table->string('crop image');
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
        Schema::dropIfExists('crop_managements');
    }
}
