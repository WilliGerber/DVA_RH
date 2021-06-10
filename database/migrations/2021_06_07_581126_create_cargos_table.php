<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->foreignId('id_empresa')->constrained('empresas');
            $table->foreignId('id_setor')->constrained('setores');
            $table->date('data_revisao');
            $table->string('descricao_sumaria', 2000);
            $table->string('descricao_detalhada', 2000);
            $table->string('experiencia_acumulada', 1000);
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
        Schema::dropIfExists('cargos');
    }
}
