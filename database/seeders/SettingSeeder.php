<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::updateOrCreate(
            [
                'name' => Settings::APP_NAME,
            ],
            [
                'name' =>  Settings::APP_NAME,
                'value' => "Gamer",
            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::APP_EMAIL,
            ],
            [
                'name' => Settings::APP_EMAIL,
                'value' => "admin@admin.com",
            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::APP_MOBILE,
            ],
            [
                'name' => Settings::APP_MOBILE,
                'value' => "01780134797",
            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::ADDRESS,
            ],
            [
                'name' => Settings::ADDRESS,
                'value' => "TA-8, Road-22, Tilpapata ,Khilgaon",
            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::ABOUT_US,
            ],
            [
                'name' => Settings::ABOUT_US,
                'value' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",

            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::FOOTER_DESCRIPTION,
            ],
            [
                'name' => Settings::FOOTER_DESCRIPTION,
                'value' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry",

            ]
        );
        Settings::updateOrCreate(
            [
                'name' => Settings::SOCIAL_NETWORK_DESCRIPTION,
            ],
            [
                'name' => Settings::SOCIAL_NETWORK_DESCRIPTION,
                'value' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",

            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::FACEBOOK,
            ],
            [
                'name' => Settings::FACEBOOK,
                'value' => "https://www.facebook.com/",

            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::TWITTER,
            ],
            [
                'name' => Settings::TWITTER,
                'value' => "https://www.facebook.com/",

            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::LINKEDIN,
            ],
            [
                'name' => Settings::LINKEDIN,
                'value' => "https://www.facebook.com/",

            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::INSTAGRAM,
            ],
            [
                'name' => Settings::INSTAGRAM,
                'value' => "https://www.facebook.com/",

            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::FOUNDER_NAME,
            ],
            [
                'name' => Settings::FOUNDER_NAME,
                'value' => "Afride Ahsan",
            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::FOUNDER_DESIGNATION,
            ],
            [
                'name' => Settings::FOUNDER_DESIGNATION,
                'value' => "Founder",
            ]
        );

        Settings::updateOrCreate(
            [
                'name' => Settings::FOUNDER_MESSAGE,
            ],
            [
                'name' => Settings::FOUNDER_MESSAGE,
                'value' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            ]
        );

    }
}
