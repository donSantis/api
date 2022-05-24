<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'post_id',
    ];

    protected $table = 'votes';

    // Relación de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Relación de Muchos a Uno
    public function post(){
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}
