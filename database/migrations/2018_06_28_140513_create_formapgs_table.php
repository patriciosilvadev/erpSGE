<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormapgsTable extends Migration
{
    public function up()
    {
        Schema::create('formapgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->boolean('ativo')->default(1);
            $table->integer('formapg_tipo_id')->unsigned();
            $table->timestamps();

            $table->foreign('formapg_tipo_id')->references('id')->on('formapg_tipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formapgs');
    }
}
