<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Blog extends Model implements HasMedia
{
    use HasFactory,HasTags,InteractsWithMedia;

    protected $guarded = [];
    protected $appends = ['attachment'];


    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('attachment')->singleFile();;
    }

    /**
     * Get the related attachments of the job
     *
     * @return string
     */
    public function getAttachmentAttribute()
    {
        return $this->getFirstMediaUrl('attachment');
    }

    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
