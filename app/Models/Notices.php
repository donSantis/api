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
}
