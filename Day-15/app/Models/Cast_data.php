<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cast_data extends Model
{
    use HasFactory;
    protected $table = 'cast';
    protected $fillable = [
        'nama',
        'umur',
        'bio',
    ];
}
 