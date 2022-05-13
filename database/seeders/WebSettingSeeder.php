<?php

namespace Database\Seeders;

use App\Models\WebSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       WebSettings::updateOrCreate(
            [
                'name' => WebSettings::HOME_PAGE,
            ],
            [
                'name' => WebSettings::HOME_PAGE,
                'title' => "Home",
                'sub_title' => "Home page",
                'meta_description' => "Home page",
                'tags' => ['Home', 'home page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::ABOUT_PAGE,
            ],
            [
                'name' => WebSettings::ABOUT_PAGE,
                'title' => "About",
                'sub_title' => "About page",
                'meta_description' => "About page",
                'tags' => ['About', 'About page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::BLOG_PAGE,
            ],
            [
                'name' => WebSettings::BLOG_PAGE,
                'title' => "Blog",
                'sub_title' => "Blog page",
                'meta_description' => "Blog page",
                'tags' => ['Blog', 'Blog page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::WORK_PAGE,
            ],
            [
                'name' => WebSettings::WORK_PAGE,
                'title' => "Work",
                'sub_title' => "Work page",
                'meta_description' => "Work page",
                'tags' => ['Work', 'Work page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::TEAM_PAGE,
            ],
            [
                'name' => WebSettings::TEAM_PAGE,
                'title' => "Team",
                'sub_title' => "Team page",
                'meta_description' => "Team page",
                'tags' => ['Team', 'Team page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::PROBLEM_PAGE,
            ],
            [
                'name' => WebSettings::PROBLEM_PAGE,
                'title' => "Problem",
                'sub_title' => "Problem page",
                'meta_description' => "Problem page",
                'tags' => ['Problem', 'Problem page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::CONTACT_PAGE,
            ],
            [
                'name' => WebSettings::CONTACT_PAGE,
                'title' => "Contact",
                'sub_title' => "Contact page",
                'meta_description' => "Contact page",
                'tags' => ['Contact', 'Contact page'],
            ]
        );

        WebSettings::updateOrCreate(
            [
                'name' => WebSettings::TERMS_PAGE,
            ],
            [
                'name' => WebSettings::TERMS_PAGE,
                'title' => "Terms",
                'sub_title' => "Terms page",
                'meta_description' => "Terms page",
                'tags' => ['Terms', 'Terms page'],
            ]
        );
    }
}
