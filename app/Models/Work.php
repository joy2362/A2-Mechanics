<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Work extends Model implements HasMedia
{
    use HasFactory, HasTags,InteractsWithMedia;
    protected $guarded = [];
    protected $appends = ['attachments'];

    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('attachments');
    }

    /**
     * Get the related attachments of the job
     *
     * @return array
     */
    public function getAttachmentsAttribute()
    {
        $attachments = [];
        foreach ($this->getMedia('attachments') as $media) {
            array_push($attachments,  $media->getFullUrl());
        }

        return $attachments;
    }


}
