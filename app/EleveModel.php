<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EleveModel extends Model
{
    protected $fillable = [
        'nom', 'premon', 'naissance', 'genre', 'email', 'password', 'role', 'classe',
    ];
}
