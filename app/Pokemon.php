<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = ['name'];
    protected $table = 'pokemons';
}
