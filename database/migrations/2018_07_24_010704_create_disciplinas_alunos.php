<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas_alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('aluno_id');
            $table->unsignedInteger('disciplina_id');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->unsignedInteger('nota_1')->nullable();
            $table->unsignedInteger('nota_2')->nullable();
            $table->unsignedInteger('nota_3')->nullable();
            $table->unsignedInteger('media')->nullable();
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
        Schema::dropIfExists('disciplinas_alunos');
    }
}
