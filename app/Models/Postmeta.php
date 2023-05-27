<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postmeta extends Model
{
    use HasFactory;

    public $timestamps = false;
    function posts(){
        return $this->hasMany(Post::class);
    }
}
