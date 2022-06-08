<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];
    use HasFactory;
    public function user(){
        return $this->hasMany('App\Models\User')->orderBy('id', 'desc');
    }


}
