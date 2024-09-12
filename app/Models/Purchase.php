<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'package_id', 'price'];

    // Relationship to the user who made the purchase
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to the package that was purchased
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}

