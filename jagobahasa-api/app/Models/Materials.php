<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;
    // protected $table = 'materials';
    public $timestamps = false;
    protected $fillable = [
        'tittle',
        'type',
        'file_path',
        'created_at',
        'updated_at',
        'status',
        'id_courses',
    ];
}
