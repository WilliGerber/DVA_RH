<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridadeGrausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridade_graus', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('descricao', 300)->nullable();
            $table->foreignId('id_usuario_ultima_alteracao')->constrained('users');
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
        Schema::dropIfExists('escolaridade_graus');
    }
}
