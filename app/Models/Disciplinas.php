<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    //use SoftDeletes;

    protected $table = 'disciplinas';
    protected $fillable = ['nome'];
}
