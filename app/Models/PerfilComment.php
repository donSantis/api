<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilComment extends Model
{
    use HasFactory;

    protected $table = 'perfilcomments';

    // Relación de Muchos a Uno
    public function user(){
        return $this->belongsTo('App\models\User', 'user_id');
    }
}
