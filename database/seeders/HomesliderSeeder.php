<?php

namespace Database\Seeders;

use App\Models\Homeslider;
use Illuminate\Database\Seeder;

class HomesliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'PSARA Certified Manned Guarding Solutions',
                'description' => 'Rigorously trained, background-verified security personnel providing round-the-clock defense for commercial, industrial, and residential premises.',
                'image' => 'image/PIC_3766.webp',
                'button_text1' => 'Hire Security Guards',
                'button_link1' => '/contact',
                'button_text2' => 'Our Guarding Services',
                'button_link2' => '/services',
                'is_active' => true,
            ],
            [
                'title' => 'Commercial & Industrial Asset Protection',
                'description' => 'Advanced access control, automated visitor tracking, perimeter security, and site risk management for 150+ corporate sites.',
                'image' => 'image/PIC_3788.webp',
                'button_text1' => 'Consult Experts',
                'button_link1' => '/contact',
                'button_text2' => 'About Us',
                'button_link2' => '/about',
                'is_active' => true,
            ],
            [
                'title' => '24/7 Perimeter Patrol & Radio Dispatch',
                'description' => 'Vigilant guard patrols, synchronized radio dispatch, and rapid inspection units ensuring zero perimeter breach across corporate facilities.',
                'image' => 'image/PIC_3792.webp',
                'button_text1' => 'Hire Patrol Squad',
                'button_link1' => '/contact',
                'button_text2' => 'Our Services',
                'button_link2' => '/services',
                'is_active' => true,
            ],
            [
                'title' => 'Event Security & Crowd Control Logistics',
                'description' => 'Tactical crowd management squads, entry screening, and VIP stage protection for corporate galas, exhibitions, and public gatherings.',
                'image' => 'image/PIC_3861.webp',
                'button_text1' => 'Book Event Security',
                'button_link1' => '/contact',
                'button_text2' => 'Contact NDS',
                'button_link2' => '/contact',
                'is_active' => true,
            ],
            [
                'title' => 'Tactical Guard Training & Physical Readiness',
                'description' => 'Every NDS security officer undergoes mandatory 100-hour PSARA physical training, threat detection drills, and fire hazard evacuation layouts.',
                'image' => 'image/PIC_4855.webp',
                'button_text1' => 'Explore Training',
                'button_link1' => '/training',
                'button_text2' => 'View Gallery',
                'button_link2' => '/gallery',
                'is_active' => true,
            ],
            [
                'title' => 'Smart Electronic CCTV & Access Integration',
                'description' => 'State-of-the-art IP surveillance cameras, AI perimeter threat detection, automated boom barriers, and integrated security logs.',
                'image' => 'image/PIC_3845.webp',
                'button_text1' => 'CCTV Integration',
                'button_link1' => '/services',
                'button_text2' => 'Contact Us',
                'button_link2' => '/contact',
                'is_active' => true,
            ],
        ];

        // Clear existing records first to maintain exact order
        Homeslider::truncate();

        foreach ($sliders as $slider) {
            Homeslider::create($slider);
        }
    }
}
