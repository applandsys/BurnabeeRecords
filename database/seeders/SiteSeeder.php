<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SiteSetting::create(
                        [
                            'social_links' => json_encode(array('facebook'=>'https://www.facebook.com/burnabeerecords','twitter'=>'https://twitter.com/burnabeerecords','instagram'=>'https://www.instagram.com/burnabeerecords','tiktok'=>'https://www.instagram.com/burnabeerecords','spotify'=>'https://open.spotify.com/user/burnabeerecords','youtube'=>'https://www.youtube.com/@burnabeerecords'))
                        ]
        );

    }
}
