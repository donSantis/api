<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title_id',
        'image',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment')->orderBy('id', 'desc');
    }

    // Relación One To Many
    public function votes(){
        return $this->hasMany('App\Models\Votes');
    }


}
