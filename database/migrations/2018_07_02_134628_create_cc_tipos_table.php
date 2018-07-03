<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcTiposTable extends Migration
{
    public function up()
    {
        Schema::create('cc_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cc_tipos');
    }
}