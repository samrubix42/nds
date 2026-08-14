<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Essential Services',
                'slug' => 'essential-services',
                'icon' => 'ri-shield-check-fill',
                'image' => 'image/PIC_3766.webp',
                'short_description' => 'Professional Manned Guarding for corporate and industrial sites, structured gate access control, and secure transport security operations.',
                'content' => '<h3>Premier Manned Guarding & Access Operations</h3>
<p>NDS Security Services provides highly trained, PSARA-compliant manned guarding forces designed for high-risk corporate, commercial, and industrial sites across Noida and Delhi NCR.</p>
<h4>Key Operational Highlights</h4>
<ul>
  <li><strong>Background-Verified Personnel:</strong> Mandatory police vetting, criminal history check, and thorough physical screening.</li>
  <li><strong>Structured Gate Access:</strong> Automated digital visitor registration, material pass tracking, and vehicle search protocols.</li>
  <li><strong>Transport Security:</strong> Secure transit guard escorts for high-value logistics and employee shuttle operations.</li>
</ul>
<p>Our security guards maintain strict discipline, sharp vigilance, and polite professional customer etiquette.</p>',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Specialised Services',
                'slug' => 'specialised-services',
                'icon' => 'ri-radar-fill',
                'image' => 'command_center.png',
                'short_description' => 'Mobile Guarding patrols, integrated tech solutions, help desk management, and round-the-clock Command Centre Operations.',
                'content' => '<h3>24/7 Centralized Command & Integrated Tech Surveillance</h3>
<p>Our state-of-the-art Command Center operates round-the-clock, integrating GPS patrol tracking, live CCTV streaming, and automated panic alarms.</p>
<h4>Specialised Capabilities</h4>
<ul>
  <li><strong>Mobile Patrol Units:</strong> Radio-equipped patrol squad checking site perimeters every 2 hours.</li>
  <li><strong>Command Room Operations:</strong> Real-time video analytics, perimeter break alerts, and instant incident logging.</li>
  <li><strong>Help Desk Management:</strong> Receptionist security guards managing visitor appointments and phone lines.</li>
</ul>',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Threat Mitigation',
                'slug' => 'threat-mitigation',
                'icon' => 'ri-file-shield-2-fill',
                'image' => 'image/PIC_3788.webp',
                'short_description' => 'Comprehensive risk assessments, loss prevention strategies, and physical security compliance audits tailored to site vulnerabilities.',
                'content' => '<h3>Proactive Risk Assessment & Security Audits</h3>
<p>Identify vulnerabilities before they become liabilities. NDS threat mitigation teams perform in-depth physical audit sweeps for warehouses, corporate hubs, and residential societies.</p>
<h4>Our Audit Standard</h4>
<ul>
  <li>Physical perimeter weakness identification and lighting audits.</li>
  <li>EHS & Fire Evacuation mock drill planning.</li>
  <li>Loss prevention strategies to curtail internal pilferage and stock leakages.</li>
</ul>',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'On-Demand Services',
                'slug' => 'on-demand-services',
                'icon' => 'ri-flashlight-fill',
                'image' => 'image/PIC_3861.webp',
                'short_description' => 'High-profile event security management, VIP Executive Protection (Bouncers), and Rapid Response Teams (RRT) for emergency dispatch.',
                'content' => '<h3>Rapid Incident Management & VIP Bouncer Escorts</h3>
<p>When high-profile events require elite protection or emergency situations demand immediate deployment, NDS On-Demand Services deliver tactical support within minutes.</p>
<h4>Service Spectrum</h4>
<ul>
  <li><strong>Event Security:</strong> Crowd control, VIP stage routing, and entry metal detection screening.</li>
  <li><strong>Executive Protection:</strong> Disciplined bouncers and Personal Security Officers (PSOs) for corporate leadership and VVIPs.</li>
  <li><strong>Rapid Response Teams (RRT):</strong> Mobile emergency units synchronized with local SHO police authorities.</li>
</ul>',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'CCTV & Digital Surveillance',
                'slug' => 'cctv-installation',
                'icon' => 'ri-camera-lens-fill',
                'image' => 'image/PIC_3845.webp',
                'short_description' => 'Enterprise-grade 4K IP camera layouts, AI perimeter detection, thermal imaging, and mobile app feed streaming.',
                'content' => '<h3>Smart Enterprise CCTV Installation</h3>
<p>NDS designs and deploys commercial-grade CCTV networks tailored for industrial premises, shopping malls, and corporate parks.</p>
<p>Featuring night-vision optics, AI motion triggers, local RAID NVR storage, and secure cloud backup options.</p>',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Access Control Systems',
                'slug' => 'access-control-systems',
                'icon' => 'ri-fingerprint-fill',
                'image' => 'image/PIC_3792.webp',
                'short_description' => 'Biometric fingerprint & facial scanners, optical turnstiles, RFID smart cards, and automated HR payroll sync.',
                'content' => '<h3>Biometric & Smart Gate Access Systems</h3>
<p>Regulate access to critical server rooms, executive suites, and staff entrances with high-precision biometric scanners and electromagnetic turnstile barriers.</p>',
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::updateOrCreate(
                ['slug' => $serviceData['slug']],
                $serviceData
            );
        }
    }
}
