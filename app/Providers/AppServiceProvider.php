<?php

namespace App\Providers;

use App\Models\Settings;
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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            $app_name = Settings::where('name',Settings::APP_NAME)->first();
            $app_email = Settings::select('value')->where('name',Settings::APP_EMAIL)->first();
            $app_mobile = Settings::select('value')->where('name',Settings::APP_MOBILE)->first();
            $about_us = Settings::where('name',Settings::ABOUT_US)->first();
            $address = Settings::select('value')->where('name',Settings::ADDRESS)->first();
            $facebook = Settings::select('value')->where('name',Settings::FACEBOOK)->first();
            $twitter = Settings::select('value')->where('name',Settings::TWITTER)->first();
            $linkedin = Settings::select('value')->where('name',Settings::LINKEDIN)->first();
            $instagram = Settings::select('value')->where('name',Settings::INSTAGRAM)->first();
            $footer_description = Settings::select('value')->where('name',Settings::FOOTER_DESCRIPTION)->first();
            $social_network_description = Settings::select('value')->where('name',Settings::SOCIAL_NETWORK_DESCRIPTION)->first();

            $founder_name = Settings::where('name',Settings::FOUNDER_NAME)->first();
            $founder_designation = Settings::select('value')->where('name',Settings::FOUNDER_DESIGNATION)->first();
            $founder_message = Settings::select('value')->where('name',Settings::FOUNDER_MESSAGE)->first();

            $hero_section_message = Settings::where('name',Settings::HERO_SECTION_MESSAGE)->first();
            $youtube_link = Settings::select('value')->where('name',Settings::YOUTUBE_LINK)->first();

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
                "Hero_section_image" => $hero_section_message->HeroImage,
            ]);
        });
    }
}
