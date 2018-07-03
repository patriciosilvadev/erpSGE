<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormapgTiposTable extends Migration
{
    public function up()
    {
        Schema::create('formapg_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formapgs');
        Schema::dropIfExists('formapg_tipos');
    }
}
