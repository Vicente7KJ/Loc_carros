<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeyOnLocacoesTable extends Migration
{
    public function up()
    {
        Schema::table('locacoes', function (Blueprint $table) {
            // Primeiro, remova a chave estrangeira existente
            $table->dropForeign(['carro_id']);

            // Adicione a nova chave estrangeira com ON DELETE CASCADE
            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('locacoes', function (Blueprint $table) {
            // Remova a chave estrangeira com ON DELETE CASCADE
            $table->dropForeign(['carro_id']);

            // Adicione novamente a chave estrangeira original
            $table->foreign('carro_id')->references('id')->on('carros');
        });
    }
}
