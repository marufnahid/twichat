<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    /**
     * @var array|mixed|string|null
     */
    protected $table='posts';
    protected $dates = ['created_at'];

    function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    function postmeta(){
        return $this->belongsTo(\App\Models\Postmeta::class);
    }

}
