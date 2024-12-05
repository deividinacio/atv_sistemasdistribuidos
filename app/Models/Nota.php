<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //use SoftDeletes;

    protected $table = 'notas';
    protected $fillable = ['nota1', 'nota2', 'nota3'];
}
