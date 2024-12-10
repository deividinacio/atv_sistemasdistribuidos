<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
     use SoftDeletes;

    protected $table = 'turmas';
    protected $fillable = ['nome', 'data_inicio', 'data_fim'];
}
