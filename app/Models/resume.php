<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'skill_year',
        'description',
        'designation',
        'create_date',
        'update_date',
    ];
}
