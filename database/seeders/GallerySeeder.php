<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Manned Guarding & Operations' => [
                'PIC_3761.webp' => 'Corporate Site Guard Deployment',
                'PIC_3762.webp' => 'Gate Entry & Access Check',
                'PIC_3802.webp' => 'Industrial Security Operations',
                'PIC_3803.webp' => 'Perimeter Patrol Inspection',
                'PIC_3811.webp' => 'High-Rise Commercial Guarding',
                'PIC_3837.webp' => 'Visitor Logging & Gate Pass Procedure',
                'PIC_3841.webp' => 'Security Squad Briefing',
                'PIC_3842.webp' => 'Night Shift Perimeter Audit',
                'PIC_3845.webp' => 'Logistics Facility Access Control',
            ],
            'Training & Drill Academy' => [
                'PIC_3846.webp' => 'Physical Fitness & Obstacle Drill',
                'PIC_3861.webp' => 'Fire Safety & Hose Drill Training',
                'PIC_3868.webp' => 'First Aid & CPR Certification',
                'PIC_3871.webp' => 'Unarmed Combat & Defense Practice',
                'PIC_3872.webp' => 'Discipline & Marching Drill',
                'PIC_3873.webp' => 'Emergency Evacuation Protocol Drill',
                'PIC_3875.webp' => 'Equipment Handling & Inspection',
                'PIC_3879.webp' => 'Ethics & Protocol Classroom Session',
                'PIC_3881.webp' => 'Physical Endurance Screening',
            ],
            'Command Center & Tech Surveillance' => [
                'PIC_4839.webp' => '24/7 CCTV Monitoring Console',
                'PIC_4848.webp' => 'IP Camera Feed Supervision',
                'PIC_4854.webp' => 'GPS Patrol Tracking Dashboard',
                'PIC_4855.webp' => 'Perimeter Alarm Alarm Trigger Check',
                'PIC_4863.webp' => 'Control Room Dispatch Operations',
                'PIC_4864.webp' => 'Thermal Imaging Analytics Desk',
                'PIC_4869.webp' => 'Radio Communication Hub',
                'PIC_4872.webp' => 'Rapid Alert Incident Management',
                'PIC_4877.webp' => 'Biometric Log Verification Room',
            ],
            'VIP Protection & Special Events' => [
                'PIC_4880.webp' => 'VVIP Escort & Bouncer Squad',
                'PIC_4885.webp' => 'Executive Protection Escort Team',
                'PIC_4892.webp' => 'Event Metal Detector Screening Gate',
                'PIC_4905.webp' => 'Crowd Management & Stage Security',
                'PIC_4918.webp' => 'Rapid Response Team (RRT) Vehicle',
                'PIC_4920.webp' => 'High-Profile Seminar Security Deployment',
                'PIC_4921.webp' => 'VIP Movement Escort Escort Route',
                'PIC_4924.webp' => 'Concert Security Barrier Management',
                'PIC_4926.webp' => 'Specialized Guard Convoy Patrol',
            ],
            'Corporate Site Audits & Infrastructure' => [
                'PIC_4928.webp' => 'Facility Vulnerability Audit Sweep',
                'PIC_4929.webp' => 'Emergency Break-Glass Station Check',
                'PIC_4932.webp' => 'Commercial Tower Parking Supervision',
                'PIC_4948.webp' => 'IT Park Access Gate Turnstile Audit',
                'PIC_4965.webp' => 'Warehouse Loss Prevention Check',
                'PIC_4967.webp' => 'Industrial Security System Inspection',
                'PIC_4992.webp' => 'Perimeter Lighting & Fence Inspection',
                'PIC_5027.webp' => 'Site Supervisor Quality Inspection',
                'PIC_5036.webp' => 'Client Coordination & Shift Handover',
            ],
        ];

        foreach ($categories as $categoryName => $items) {
            $category = GalleryCategory::updateOrCreate(
                ['name' => $categoryName],
                ['is_active' => true]
            );

            foreach ($items as $fileName => $title) {
                Gallery::updateOrCreate(
                    [
                        'gallery_category_id' => $category->id,
                        'image' => 'gallery-images/' . $fileName,
                    ],
                    [
                        'title' => $title,
                        'is_active' => true,
                    ]
                );
            }
        }
    }
}
