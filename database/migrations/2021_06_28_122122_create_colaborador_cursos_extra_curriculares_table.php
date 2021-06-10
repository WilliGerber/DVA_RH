<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorCursosExtraCurricularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador_cursos_extra_curriculares', function (Blueprint $table) {
            $table->id();
            // $table->foreingId('id_colaborador')->constrained('colaboradores');
            // $table->foreingId('id_curso_extra_curricular')->constrained('extra_curricular_cursos');
            // $table->foreignId('id_usuario_ultima_alteracao')->constrained('users');
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
        Schema::dropIfExists('colaborador_cursos_extra_curriculares');
    }
}
