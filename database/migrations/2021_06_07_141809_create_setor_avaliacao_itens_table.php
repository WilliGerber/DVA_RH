<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetorAvaliacaoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setor_avaliacao_itens', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('descricao', 500);
            $table->foreignId('id_setor')->contrained('setores');
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
        Schema::dropIfExists('setor_avaliacao_itens');
    }
}
