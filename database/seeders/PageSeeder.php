<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pages;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pages::insert(
                [
                    [
                        'page_title'=>'About Us',
                        'page_slug'=>'about',
                        'content'=>'about us content will go here'
                    ],    
                    [
                        'page_title'=>'Privacy policy',
                        'page_slug'=>'privacy-policy',
                        'content'=>'Privacy content will go here'
                    ],    
                    [
                        'page_title'=>'Frequently ask Question',
                        'page_slug'=>'faq',
                        'content'=>'Freequently Asking  content will go here'
                    ],    
                ]);
    }
}
