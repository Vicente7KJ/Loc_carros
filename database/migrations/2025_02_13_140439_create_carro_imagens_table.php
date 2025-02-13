<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarroImagensTable extends Migration
{
    public function up()
    {
        Schema::create('carro_imagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carro_id');
            $table->string('caminho');
            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carro_imagens');
    }
}
