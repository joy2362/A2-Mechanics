<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class WebSettings extends Model
{
    use HasFactory,HasTags;

    protected $guarded = [];

    public const HOME_PAGE = 'home';
    public const ABOUT_PAGE = 'about';
    public const BLOG_PAGE = 'blog';
    public const WORK_PAGE = 'work';
    public const TEAM_PAGE = 'team';
    public const PROBLEM_PAGE = 'problem';
    public const CONTACT_PAGE = 'contact';
    public const TERMS_PAGE = 'terms';
}
