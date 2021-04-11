<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'maths', 'fr', 'ang', 'svt', 'eps', 'hg',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
