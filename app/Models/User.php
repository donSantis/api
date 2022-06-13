<?php

namespace App\Models;

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
        'image',
        'phrase',
        'interest',
        'description',
        'info1',
        'info2',
        'info3',
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
    public function comment(){
        return $this->hasMany('App\Models\Comment')->orderBy('id', 'desc');
    }
    public function perfilcomment(){
        return $this->hasMany('App\Models\PerfilComment')->orderBy('id', 'desc');
    }

    public function school(){
        return $this->hasOne(School::class, 'id');
    }
    public function career(){
        return $this->hasOne(Career::class, 'id');
    }

}
