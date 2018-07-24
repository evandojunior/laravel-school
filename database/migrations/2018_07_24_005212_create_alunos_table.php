<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricula')->unique();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep', 11);
            $table->string('cidade', 30);
            $table->string('uf', 2);
            $table->date('data_entrada');
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
        Schema::dropIfExists('alunos');
    }
}
