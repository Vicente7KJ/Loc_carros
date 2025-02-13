<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToCarrosTable extends Migration
{
    public function up()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->string('status')->default('disponível');
        });
    }

    public function down()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
