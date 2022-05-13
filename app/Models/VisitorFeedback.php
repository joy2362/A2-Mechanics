<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class VisitorFeedback extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    const MESSAGE = "message";
    const QUESTION = "question";

    protected $appends = ['AttachmentFile'];
    protected $guarded = [];

    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachment')->singleFile();
    }

    public function getAttachmentFileAttribute()
    {
        return $this->getFirstMediaUrl('attachment');
    }
}
