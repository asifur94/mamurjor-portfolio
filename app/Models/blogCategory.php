<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'slug'];

    // If you want to use 'name' instead of 'category_name'
    public function getNameAttribute()
    {
        return $this->attributes['category_name'];
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}

