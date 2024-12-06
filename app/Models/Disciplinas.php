<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplinas extends Model
{
    use SoftDeletes;

    protected $table = 'disciplinas';
    protected $fillable = ['nome'];
}
