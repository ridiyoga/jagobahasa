<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Courses extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    // protected $table = 'courses';
    public $timestamps = false;
    protected $fillable = [
        'tittle',
        'description',
        'level',
        'program',
        'thumbnail',
        'instructor_id',
        'id_users',
        'status',
    ];
}
