<?php

namespace App\Providers;

use App\Models\Settings;
use App\Models\WebSettings;
use App\Models\Work;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private  function fetchSetting($name){
        return Settings::where('name',$name)->first();
    }

    private function fetchWebSetting($name){
        return  WebSettings::where('name',$name)->first();
    }

    private function fetchTags($tags){
        $keyword = [];
        foreach (  $tags as $tag) {
            array_push($keyword, $tag['name']);
        }
        return implode(",",$keyword);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            $service = Work::inRandomOrder()->limit(4)->get();
            $app_name = $this->fetchSetting(Settings::APP_NAME);
            $app_email = $this->fetchSetting(Settings::APP_EMAIL);
            $app_mobile = $this->fetchSetting(Settings::APP_MOBILE);
            $about_us = $this->fetchSetting(Settings::ABOUT_US);
            $address = $this->fetchSetting(Settings::ADDRESS);
            $facebook = $this->fetchSetting(Settings::FACEBOOK);
            $twitter = $this->fetchSetting(Settings::TWITTER);
            $linkedin = $this->fetchSetting(Settings::LINKEDIN);
            $instagram = $this->fetchSetting(Settings::INSTAGRAM);
            $footer_description = $this->fetchSetting(Settings::FOOTER_DESCRIPTION);
            $social_network_description = $this->fetchSetting(Settings::SOCIAL_NETWORK_DESCRIPTION);
            $founder_name = $this->fetchSetting(Settings::FOUNDER_NAME);
            $founder_designation = $this->fetchSetting(Settings::FOUNDER_DESIGNATION);
            $founder_message = $this->fetchSetting(Settings::FOUNDER_MESSAGE);
            $hero_section_message = $this->fetchSetting(Settings::HERO_SECTION_MESSAGE);
            $youtube_link = $this->fetchSetting(Settings::YOUTUBE_LINK);
            $terms_and_condition = $this->fetchSetting(Settings::TERMSANDCONDITION);

            $home_page = $this->fetchWebSetting(WebSettings::HOME_PAGE);
            $about_page = $this->fetchWebSetting(WebSettings::ABOUT_PAGE);
            $blog_page = $this->fetchWebSetting(WebSettings::BLOG_PAGE);
            $work_page = $this->fetchWebSetting(WebSettings::WORK_PAGE);
            $team_page = $this->fetchWebSetting(WebSettings::TEAM_PAGE);
            $problem_page = $this->fetchWebSetting(WebSettings::PROBLEM_PAGE);
            $contact_page = $this->fetchWebSetting(WebSettings::CONTACT_PAGE);
            $terms_page = $this->fetchWebSetting(WebSettings::TERMS_PAGE);

            $home_tag = $this->fetchTags($home_page->tags);
            $about_tag = $this->fetchTags($about_page->tags);
            $blog_tag = $this->fetchTags($blog_page->tags);
            $work_tag = $this->fetchTags($work_page->tags);
            $team_tag = $this->fetchTags($team_page->tags);
            $problem_tag = $this->fetchTags($problem_page->tags);
            $contact_tag = $this->fetchTags($contact_page->tags);
            $terms_tag = $this->fetchTags($terms_page->tags);

            $view->with([
                "App_Name" => $app_name->value,
                "App_logo" => $app_name->AppLogo,
                "App_Mobile" => $app_mobile->value,
                "App_Email" => $app_email->value,
                "About_Us" => $about_us->value,
                "About_Us_Image" => $about_us->AboutUsImage,
                "Address" => $address->value,
                "Facebook" => $facebook->value,
                "Twitter" => $twitter->value,
                "Linkedin" => $linkedin->value,
                "Instagram" => $instagram->value,
                "Footer_Description" => $footer_description->value,
                "Social_Network_Description" => $social_network_description->value,
                "Founder_name" => $founder_name->value,
                "Founder_image" => $founder_name->OwnerImage,
                "Founder_designation" => $founder_designation->value,
                "Founder_message" => $founder_message->value,
                "Hero_section_message" => $hero_section_message->value,
                "Youtube_link" => $youtube_link->value,
                "terms_and_condition" => $terms_and_condition->value,
                "Hero_section_image" => $hero_section_message->HeroImage,
                'home_page' => $home_page,
                'about_page' => $about_page,
                'blog_page' => $blog_page,
                'work_page' => $work_page,
                'team_page' => $team_page,
                'problem_page' => $problem_page,
                'contact_page' => $contact_page,
                'home_tag' => $home_tag,
                'about_tag' => $about_tag,
                'blog_tag' => $blog_tag,
                'work_tag' => $work_tag,
                'team_tag' => $team_tag,
                'problem_tag' => $problem_tag,
                'contact_tag' => $contact_tag,
                'terms_page' => $terms_page,
                'terms_tag' => $terms_tag,
                'service' => $service
            ]);
        });
    }
}
