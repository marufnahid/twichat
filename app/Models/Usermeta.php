<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermeta extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['fname','lname','bio','location'];
    function users(){
        return $this->hasOne(User::class);
    }
}
