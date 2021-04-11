<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    protected $fillable = [
        'nom', 'premon', 'naissance', 'genre', 'email', 'password', 'role',
    ];
}
