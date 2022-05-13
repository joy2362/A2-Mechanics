<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the post that owns the comment.
     */
    public function Blog()
    {
        return $this->hasMany(Blog::class);
    }
}
