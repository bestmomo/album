<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ { User, Category };

class Image extends Model
{
    /**
     * Get the category that owns the image.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the image.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query eager load user and order query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatestWithUser($query)
    {
        return $query->with('user')->latest();
    }
}
