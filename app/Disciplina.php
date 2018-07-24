<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //

    public function notas(){
        return belongsTo(Disciplina::class, 'disciplinas_alunos');
    }

    public function calculaMedia(){
        $media = ($this->pivot->nota_1 + $this->pivot->nota_2 + $this->pivot->nota_3) / 3;

        return number_format($media, 2, '.', '');
    }
}
