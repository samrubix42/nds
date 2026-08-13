<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'PSARA Certified Senior Security Supervisor',
                'description' => 'We are seeking an experienced PSARA Certified Senior Security Supervisor to lead security operations across corporate IT parks in Sector 62, Noida. Responsibilities include supervising a team of 15+ guards, managing visitor access control protocols, conducting daily briefing drills, auditing incident logbooks, and serving as the primary liaison for facility management.',
                'location' => 'Sector 62 & Tech Zone 4, Noida',
                'shift' => 'Rotational',
                'status' => 'open',
            ],
            [
                'title' => 'Executive Field Security Inspector',
                'description' => 'Join our mobile patrol unit as a Field Security Inspector. You will be responsible for conducting surprise post audits across 25+ commercial and industrial client sites along the Greater Noida Expressway. Duties include verifying guard turnout, checking radio communication readiness, evaluating perimeter security vulnerabilities, and submitting real-time reports to our central command center.',
                'location' => 'Greater Noida Expressway & Commercial Hubs',
                'shift' => 'Day',
                'status' => 'open',
            ],
            [
                'title' => 'Armed Security Officer (Ex-Servicemen Preferred)',
                'description' => 'High-level armed security assignment for banking headquarters and high-value logistics warehouses in Noida. Requires valid gun license, exceptional weapons handling skills, perimeter defense vigilance, and quick reaction capabilities during emergency alarms. Candidates with Indian Army, Navy, Air Force, or Para-military background preferred.',
                'location' => 'Corporate Banking HQ, Sector 18, Noida',
                'shift' => 'Night',
                'status' => 'open',
            ],
            [
                'title' => 'Female Security Screening Officer',
                'description' => 'Responsible for female visitor access control, luggage screening, executive desk management, and maintaining safety protocols inside MNC corporate offices in Sector 132, Noida. Candidate must possess excellent communication skills, polite demeanor, and prior experience in corporate screening.',
                'location' => 'IT Parks & MNC Towers, Sector 132, Noida',
                'shift' => 'Day',
                'status' => 'open',
            ],
            [
                'title' => '24/7 CCTV & Surveillance Command Center Operator',
                'description' => 'Operate video management software (VMS) and AI threat detection systems at NDS Central Command Center. Monitor live IP CCTV camera feeds from 50+ corporate client sites, analyze perimeter intrusion alerts, log security events, and coordinate immediate dispatch of emergency quick-response teams (QRT).',
                'location' => 'NDS Central Command Center, Sector 18, Noida',
                'shift' => 'Rotational',
                'status' => 'open',
            ],
        ];

        foreach ($jobs as $job) {
            JobPost::updateOrCreate(
                ['title' => $job['title']],
                $job
            );
        }
    }
}
