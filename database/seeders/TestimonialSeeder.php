<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Amit Sharma',
                'designation' => 'Chief Executive Officer, DLF Tech Park',
                'rating' => 5,
                'description' => 'NDS has been managing our manned guarding and 24/7 command center operations for over 3 years. Their discipline, regular operations audits, and emergency response time are unmatched in Delhi NCR. Highly recommend their services!',
            ],
            [
                'name' => 'Priya Goel',
                'designation' => 'Operations Director, Gaur City Mall',
                'rating' => 5,
                'description' => 'Securing a high-footfall mall requires swift coordination. NDS deployed a highly trained crowd control squad and optimized our parking patrol loop. Their team is always alert and professional.',
            ],
            [
                'name' => 'Rohan Mehta',
                'designation' => 'President, RWA Emerald Heights',
                'rating' => 5,
                'description' => 'With NDS Security, our township residents feel completely safe. Their digital visitor verification protocols and polite, background-verified guards are outstanding. The best security partner!',
            ],
            [
                'name' => 'Vikram Singh',
                'designation' => 'Facility Head, Tech Mahindra Noida',
                'rating' => 5,
                'description' => 'The access control systems and manned guarding deployed by NDS have streamlined our corporate visitor tracking. Their 24/7 command center support is top notch.',
            ],
            [
                'name' => 'Sandeep Verma',
                'designation' => 'General Manager, Bhutani Infra',
                'rating' => 5,
                'description' => 'NDS provided complete security audit sweeps and 24-hour manned guarding for our commercial tower construction sites in Noida Extension. Zero security breaches recorded.',
            ],
            [
                'name' => 'Neeta Agarwal',
                'designation' => 'Administrative Lead, Asian Hospital Noida',
                'rating' => 5,
                'description' => 'Hospital security demands sensitivity, discipline, and quick emergency escalation. NDS security guards excel in handling emergency room crowd management and patient safety protocol.',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['name' => $testimonial['name'], 'designation' => $testimonial['designation']],
                $testimonial
            );
        }
    }
}
