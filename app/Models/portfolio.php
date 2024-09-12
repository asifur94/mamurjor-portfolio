<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['category_id', 'project_title', 'project_des', 'project_image'];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}
