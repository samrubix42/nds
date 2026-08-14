<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Are your security guards PSARA certified and background verified?',
                'answer' => 'Yes, 100% of our security personnel are fully compliant with the PSARA Act 2005. Every guard undergoes mandatory police character vetting, criminal background history check, and thorough physical screening before deployment.',
                'status' => true,
            ],
            [
                'question' => 'What is the emergency response time in Noida & NCR?',
                'answer' => 'We operate a 24/7 central command room that coordinates quick response alerts. For any emergency at our secured Noida or NCR facilities, backup guards and field operations supervisors respond to the site in under 15 minutes.',
                'status' => true,
            ],
            [
                'question' => 'How do you monitor guard attendance and perimeter patrols?',
                'answer' => 'Our security guards use real-time digital logging and biometric devices at client entries. Patrol paths are managed through barcode/RFID tags placed across the facility perimeter, which update the Noida Command Center instantly.',
                'status' => true,
            ],
            [
                'question' => 'Can you customize security configurations for high-footfall sites?',
                'answer' => 'Absolutely. We specialize in custom security deployments for high-footfall commercial zones like shopping centers and tech parks (e.g., Gaur City Mall). We coordinate physical guarding, vehicle flow, entry checkpoints, and central CCTV monitoring.',
                'status' => true,
            ],
            [
                'question' => 'What range of security services does NDS Security offer?',
                'answer' => 'NDS Security offers end-to-end security solutions including Manned Guarding, Corporate & Industrial Security, Executive VIP Protection (Bouncers/PSOs), CCTV & Wireless Surveillance, Biometric Access Control, and Physical Site Risk Audits.',
                'status' => true,
            ],
            [
                'question' => 'How quickly can NDS deploy security guards for new sites or events?',
                'answer' => 'For standard corporate or residential site guarding, we deploy within 24 to 48 hours following a site audit. For emergency event security or VIP bouncer escorts, rapid deployment can be mobilized within a few hours.',
                'status' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                $faq
            );
        }
    }
}
