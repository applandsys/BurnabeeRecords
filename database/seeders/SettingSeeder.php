<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(
                [
                    'footer_content'=>'© 2023 Burnabee Records. All Rights Reserved. All videos and shows on this platform are trademarks of, and all related images and content are the property of, Streamit Inc. Duplication and copy of this is strictly prohibited. All rights reserved.',
                    'facebook'=>'https://www.facebook.com/burnabeerecords',
                    'twitter'=>'https://twitter.com/burnabeerecords',
                    'instagram'=>'https://www.instagram.com/burnabeerecords',
                    'tiktok'=>'https://www.instagram.com/burnabeerecords',
                    'spotify'=>'https://open.spotify.com/user/burnabeerecords',
                    'youtube'=>'https://www.youtube.com/@burnabeerecords'
                ]
            );
    }

}
