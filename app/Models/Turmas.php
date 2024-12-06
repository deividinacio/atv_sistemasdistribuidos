<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    // use SoftDeletes;

    protected $table = 'turma';
    protected $fillable = ['nome', 'data_inicio', 'data_fim'];
}
