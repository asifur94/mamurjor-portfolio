<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'sub_title',
        'description',
        'btn_text',
        'btn_url',
        'birth_date',
        'email',
        'phone',
        'skype_username',
        'address',
    ];
}
