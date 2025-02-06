<?php

// database/migrations/xxxx_xx_xx_create_locacoes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocacoesTable extends Migration
{
    public function up()
    {
        Schema::create('locacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carro_id')->constrained('carros');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->decimal('valor_pago', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locacoes');
    }
}
