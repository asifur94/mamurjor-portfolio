<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'duration', 'features', 'user_id',
    ];

    /**
     * Get the user that owns the package.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function purchases()
{
    return $this->hasMany(Purchase::class);
}

}
