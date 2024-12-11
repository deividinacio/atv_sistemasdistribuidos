<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;

    protected $table = 'alunos';
    protected $fillable = ['nome', 'sobrenome', 'data_nascimento', 'turmas_id_fk'];

    public function turma(){
      return  $this->belongsTo(Turma::class, 'turmas_id_fk', 'id'); // campo chave estrangeira e identificador da tabela estrangeira 

    }

    public function nota(){
      return $this->hasMany(Nota::class, 'alunos_id_fk', 'id');
    }

    public function disciplina(){
      return $this->hasMany(Disciplinas::class, 'disciplinas_id_fk', 'id');
    }

}
