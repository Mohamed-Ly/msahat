<?php

namespace Database\Seeders;

use App\Models\Sitting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SittingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the user and get the User model instance
        $user = Sitting::create([
            'company_name' => 'مساحات',
            'facebook_url' => 'https://www.facebook.com/share/1C7pZXKYL2/?mibextid=qi2Omg',
            'instagram_url' => 'https://www.instagram.com/msahat.ly?igsh=MTJ3OHU3azNnMG9pOQ==',
            'tiktok_url' => 'https://www.tiktok.com/@msahat2?_t=ZM-8wGqYptygn1&_r=1', // Note: Did you mean 'role' or 'roles' instead of 'rools'?
            'linkedin_url' => '',
            'youtube_url' => '',
        ]);
        

    }
}
