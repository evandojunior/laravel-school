<?php

namespace App\Aluno;

use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
    protected $fillable = [
        'matricula',
        'email',
        'nome',
        'endereco',
        'bairro',
        'uf',
        'cidade',
        'cep',
        'data_entrada',
    ];

    protected $dates = [
        'data_entrada'
    ];

    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class, 'disciplinas_alunos', 'disciplina_id','aluno_id')
        ->withPivot(['nota_1','nota_2', 'nota_3']);
    }
}
