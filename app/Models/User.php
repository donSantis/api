<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'career_id',
        'nickname',
        'lastname',
        'password',
        'email',
        'phone',
        'section',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
        return $this->hasMany('App\Models\Post')->orderBy('id', 'desc');
    }
    // Relación One To Many / de uno a muchos
    public function commentary(){
        return $this->hasMany('App\Models\Commentary')->orderBy('id', 'desc');
    }

    // Relación One To Many
    public function votes(){
        return $this->hasMany('App\Models\Votes');
    }

    // Relación de Muchos a Uno
    public function image(){
        return $this->belongsTo('App\Models\Image', 'user_id');
    }

}
