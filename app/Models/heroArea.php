<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heroArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'subheading',
        'background_image',
        'button_text',
        'file_path',
    ];
}
