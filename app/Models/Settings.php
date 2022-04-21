<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Settings extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded = [];

    public const APP_NAME = 'app_name';
    public const APP_EMAIL = 'app_email';
    public const APP_MOBILE = 'app_mobile';
    public const ADDRESS =  'address';
    public const ABOUT_US = 'about_us';
    public const FACEBOOK = 'facebook';
    public const TWITTER = 'twitter';
    public const LINKEDIN = 'linkedin';
    public const INSTAGRAM = 'instagram';
    public const SOCIAL_NETWORK_DESCRIPTION = 'social_network_description';
    public const FOOTER_DESCRIPTION = 'footer_description';
    public const FOUNDER_NAME = 'founder_name';
    public const FOUNDER_DESIGNATION = 'founder_designation';
    public const FOUNDER_MESSAGE = 'founder_message';


    protected $appends = ['AppLogo','AboutUsImage','OwnerImage'];

    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('app_logo')->singleFile();
        $this->addMediaCollection('feather_image')->singleFile();
        $this->addMediaCollection('owner_image')->singleFile();
    }

    public function getAppLogoAttribute()
    {
        return $this->getFirstMediaUrl('app_logo');
    }

    public function getAboutUsImageAttribute()
    {
        return $this->getFirstMediaUrl('feather_image');
    }

    public function getOwnerImageAttribute()
    {
        return $this->getFirstMediaUrl('owner_image');
    }
}
