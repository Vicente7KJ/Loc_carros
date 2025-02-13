<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToCarrosTable extends Migration
{
    public function up()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->string('imagem')->nullable()->after('modelo');
        });
    }

    public function down()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->dropColumn('imagem');
        });
    }
}
