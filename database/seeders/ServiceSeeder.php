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
                'title' => 'Essential Services (Manned Guarding)',
                'slug' => 'essential-services',
                'icon' => 'ri-shield-check-fill',
                'image' => 'image/PIC_3766.webp',
                'short_description' => 'Professional Manned Guarding for corporate hubs, industrial sites, and residential complexes with structured gate access control, background-verified personnel, and 24/7 supervisor patrols.',
                'content' => '<h3>Premier Manned Guarding & Access Operations</h3>
<p>NDS Security Services provides highly trained, PSARA-compliant manned guarding forces designed for high-risk corporate, commercial, and industrial sites across Noida, Greater Noida, and Delhi NCR. Our protection officers undergo a minimum of 100 hours of mandatory physical training, crisis management drills, and customer etiquette training before site deployment.</p>

<h4>Core Operational Capabilities</h4>
<ul>
  <li><strong>Background-Verified Guarding Force:</strong> Every officer is vetted through police verification, address authentication, criminal record checks, and mandatory health screenings.</li>
  <li><strong>Structured Gate & Visitor Management:</strong> Automated digital entry logs, material inward/outward pass management, and systematic vehicle search procedures.</li>
  <li><strong>Perimeter Line Night Patrols:</strong> Synchronized guard rotations equipped with digital QR check-point scanners ensuring total site perimeter coverage.</li>
  <li><strong>Transport & Employee Escorts:</strong> Secure transit guard escorts for late-night corporate shuttle routes, female employee commutes, and high-value material transit.</li>
</ul>

<h4>Key Benefits for Your Facility</h4>
<p>Our guards act as both a strong visual deterrent to trespassers and a polite, helpful first contact point for your authorized visitors. With 24/7 field supervisor inspections, we ensure zero sleeping on duty, strict uniform dress codes, and immediate relief replacements.</p>',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Specialised Corporate Security',
                'slug' => 'specialised-services',
                'icon' => 'ri-radar-fill',
                'image' => 'image/PIC_3788.webp',
                'short_description' => 'Mobile Guarding patrols, integrated security tech, concierge help desk management, and round-the-clock 24/7 Command Centre Operations.',
                'content' => '<h3>24/7 Centralized Command & Integrated Surveillance Operations</h3>
<p>Modern corporate facilities require more than static guarding. NDS Specialised Services integrate physical guard presence with state-of-the-art Command Center tracking to deliver real-time asset protection and rapid threat escalation.</p>

<h4>Specialised Operational Features</h4>
<ul>
  <li><strong>Central Command Monitoring:</strong> 24/7 remote video feed inspection, AI perimeter breach alerts, and instant incident logging from our Noida Command Center.</li>
  <li><strong>Mobile Patrol Squads:</strong> GPS-monitored rapid inspection vehicles conducting surprise night audits across corporate parks and IT hubs.</li>
  <li><strong>Concierge & Front Desk Support:</strong> Executive-groomed security receptionists managing badge issuance, VIP arrival coordination, and phone line assistance.</li>
  <li><strong>Emergency Escalation Protocols:</strong> Direct radio hotline connection with local police stations, fire stations, and emergency medical services.</li>
</ul>

<h4>Why Choose NDS Specialised Services?</h4>
<p>We combine human vigilance with modern surveillance tech, giving facility managers real-time visibility through daily digital incident logs and monthly security audit reports.</p>',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Threat Mitigation & Risk Audits',
                'slug' => 'threat-mitigation',
                'icon' => 'ri-file-shield-2-fill',
                'image' => 'image/PIC_3788.webp',
                'short_description' => 'Comprehensive physical security audits, hazard vulnerability assessments, loss prevention strategies, and EHS fire safety compliance.',
                'content' => '<h3>Proactive Risk Assessment & Institutional Security Audits</h3>
<p>Identify vulnerabilities before they become financial or operational liabilities. NDS threat mitigation specialists conduct rigorous physical security audits for manufacturing plants, commercial towers, warehouses, and gated communities.</p>

<h4>Our Audit Standard & Procedures</h4>
<ul>
  <li><strong>Perimeter Vulnerability Audits:</strong> Comprehensive inspection of boundary walls, perimeter lighting, entry gates, and blind spots.</li>
  <li><strong>Loss Prevention & Stock Pilferage Audits:</strong> Tailored protocols to prevent internal inventory leakage, unauthorized loading dock access, and material theft.</li>
  <li><strong>EHS & Fire Evacuation Mock Drills:</strong> Coordination of high-rise smoke evacuation drills, testing of fire hydrants, and emergency exit route clearings.</li>
  <li><strong>Compliance Verification:</strong> Auditing site security registers, guard shift compliance, and PSARA legal documentation.</li>
</ul>

<h4>Actionable Security Reports</h4>
<p>Following every audit, NDS delivers an executive report outlining identified risks, priority risk ratings, and cost-effective corrective recommendations.</p>',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'On-Demand & Event Security',
                'slug' => 'on-demand-services',
                'icon' => 'ri-flashlight-fill',
                'image' => 'image/PIC_3861.webp',
                'short_description' => 'High-profile event security management, VIP Executive Protection (Personal Security Officers & Bouncers), and Rapid Response Teams (RRT).',
                'content' => '<h3>Tactical Event Management & VIP Executive Escorts</h3>
<p>When hosting high-profile corporate galas, trade exhibitions, or managing executive visits, NDS On-Demand Security delivers tactical crowd control, stage protection, and elite VIP escorts with short-notice deployment capabilities.</p>

<h4>Service Spectrum</h4>
<ul>
  <li><strong>High-Profile Event Security:</strong> Entry metal detector screening, VIP green room access control, stage shielding, and crowd management logistics.</li>
  <li><strong>Executive Protection & PSOs:</strong> Armed and unarmed Personal Security Officers (PSOs) and physically imposing bouncers for VVIPs and corporate executives.</li>
  <li><strong>Rapid Response Teams (RRT):</strong> Tactical squad units dispatched instantly to resolve site disturbances, labor unrest, or emergency situations.</li>
  <li><strong>Valet & Parking Logistics:</strong> Organised parking management and perimeter crowd containment for large public gatherings.</li>
</ul>

<h4>Elite Standard of Discipline</h4>
<p>All NDS bouncers and PSOs maintain strict professional discipline, de-escalation communication skills, and immaculate black-uniform grooming codes.</p>',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'CCTV & Electronic Surveillance',
                'slug' => 'cctv-installation',
                'icon' => 'ri-camera-lens-fill',
                'image' => 'image/PIC_3845.webp',
                'short_description' => 'Enterprise-grade 4K IP camera layouts, AI perimeter intrusion detection, thermal imaging, and cloud remote view feed integration.',
                'content' => '<h3>Smart Enterprise CCTV Design & Installation</h3>
<p>NDS Security installs and maintains enterprise-grade IP CCTV camera networks tailored for industrial premises, shopping malls, corporate parks, and residential societies.</p>

<h4>Technical Capabilities</h4>
<ul>
  <li><strong>4K High-Definition IP Cameras:</strong> Night-vision optics, WDR technology, and weatherproof vandal-proof housings.</li>
  <li><strong>AI Perimeter Intrusion Analytics:</strong> Automated line-crossing alerts, facial recognition triggers, and suspicious loitering detection.</li>
  <li><strong>Centralized NVR & RAID Storage:</strong> Secure multi-terabyte local NVR recording with redundant cloud backup options.</li>
  <li><strong>Mobile & Web Remote View:</strong> Live video streaming access on authorized smartphones and tablet devices.</li>
</ul>

<h4>End-to-End Maintenance</h4>
<p>We provide full hardware installation, cabling, network setup, and Annual Maintenance Contracts (AMC) to ensure zero downtime for your surveillance system.</p>',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Access Control Systems',
                'slug' => 'access-control-systems',
                'icon' => 'ri-fingerprint-fill',
                'image' => 'image/PIC_3792.webp',
                'short_description' => 'Biometric facial recognition scanners, optical turnstiles, RFID smart card barriers, and automated Visitor Management Systems (VMS).',
                'content' => '<h3>Biometric & Smart Gate Access Automation</h3>
<p>Regulate entry to critical server rooms, corporate offices, and manufacturing zones with high-precision biometric scanners, electromagnetic lock systems, and automated optical turnstiles.</p>

<h4>System Highlights</h4>
<ul>
  <li><strong>Contactless Facial & Biometric Scanners:</strong> Sub-second identification speed with anti-spoofing liveness detection.</li>
  <li><strong>Optical Turnstiles & Flap Barriers:</strong> High-speed pedestrian access gates for corporate lobbies and IT park entrances.</li>
  <li><strong>Automated Boom Barriers:</strong> Long-range RFID vehicle reader barriers for residential societies and commercial basements.</li>
  <li><strong>Visitor Management Software (VMS):</strong> Digital QR-code guest passes, OTP visitor verification, and instant host notification alerts.</li>
</ul>

<h4>Seamless HR & Payroll Integration</h4>
<p>Our access control hardware integrates seamlessly with leading HR payroll software for automated employee attendance logging.</p>',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'title' => 'Facility Management & Housekeeping',
                'slug' => 'facility-management',
                'icon' => 'ri-building-line',
                'image' => 'image/PIC_4855.webp',
                'short_description' => 'Comprehensive corporate housekeeping, janitorial staffing, utility maintenance, and integrated facility management solutions.',
                'content' => '<h3>Integrated Facility Management & Housekeeping Operations</h3>
<p>Maintain pristine hygiene, structural safety, and seamless day-to-day operations with NDS Integrated Facility Management solutions designed for corporate offices, commercial towers, and educational institutions.</p>

<h4>Services Offered</h4>
<ul>
  <li><strong>Corporate Housekeeping & Janitorial:</strong> Eco-friendly sanitization, floor scrubbing machine operations, and washroom hygiene management.</li>
  <li><strong>Pantry & Utility Staffing:</strong> Trained pantry office boys, steward staff, and office boys for executive floors.</li>
  <li><strong>M&E Utility Operations:</strong> Electrical maintenance, HVAC filter audits, and generator backup operations.</li>
</ul>',
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'title' => 'Industrial & Factory Security',
                'slug' => 'industrial-security',
                'icon' => 'ri-building-4-fill',
                'image' => 'image/PIC_4880.webp',
                'short_description' => 'Heavy industrial plant protection, material weight-bridge verification, warehouse inventory security, and labor entrance gates.',
                'content' => '<h3>Industrial Plant & Manufacturing Security</h3>
<p>Industrial units present unique security challenges—from raw material pilferage to heavy machinery safety. NDS provides specialized industrial protection squads for manufacturing plants and logistics hubs.</p>

<h4>Industrial Protection Features</h4>
<ul>
  <li><strong>Weigh-Bridge & Dispatch Audits:</strong> Verification of material invoice slips, truck weight slips, and seal integrity checks.</li>
  <li><strong>Labor Gate & Shift Audits:</strong> Screening shift workers for restricted items, alcohol testing, and safety gear verification.</li>
  <li><strong>Hazard Material Access Control:</strong> Strict authorization checks for chemical storage units, fuel tanks, and scrap yards.</li>
</ul>',
                'is_active' => true,
                'sort_order' => 8,
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
