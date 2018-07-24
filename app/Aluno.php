<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    
    public function disciplinas(){
        return $this->hasMany(Disciplina::class);
    }
}
