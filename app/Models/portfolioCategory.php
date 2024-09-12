<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $fillable = ['category_name', 'slug'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }
}
