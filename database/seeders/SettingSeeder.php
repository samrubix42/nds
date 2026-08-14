<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultSettings = [
            'company_name' => 'NDS GROUP OF COMPANIES',
            'tagline' => 'We Protect So You Can Live Safe',
            'favicon' => '',
            'email' => 'info@ndssecurityservices.com',
            'phone_number' => '+91 88005-93141',
            'phone_number_2' => '+91 88105-67716',
            'whatsapp_number' => '+91 88005-93141',
            'address' => 'Plot No. 128, Haibatpur, Near Gaur City Mall, Greater Noida - 201318 (U.P.)',
            'office_time' => 'Mon - Sat: 9:00 AM - 7:00 PM (24/7 Command Center)',
            'instagram' => 'https://instagram.com/ndssecurityservices',
            'x' => 'https://x.com/ndssecurity',
            'facebook' => 'https://facebook.com/ndssecurityservices',
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::set($key, $value);
        }
    }
} 
