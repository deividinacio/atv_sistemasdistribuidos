<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professores extends Model
{
    use SoftDeletes;

    protected $table = 'professores';
    protected $fillable = ['nome', 'sobrenome', 'formacao'];
}
