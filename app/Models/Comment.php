<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';



    // Relación One To Many / de uno a muchos
    public function posts(){
        return $this->belongsTo('App\models\Post', 'post_id');
    }

    // Relación One To Many
    public function likes(){
        return $this->hasMany('App\models\Like');
    }

    // Relación de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\models\User', 'user_id');
    }
}
