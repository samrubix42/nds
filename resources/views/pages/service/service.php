<?php

use Livewire\Component;

new class extends Component
{
    public string $slug = '';
    public array $service = [];

    // All available services and their custom technical copy
    protected array $servicesData = [
        'cctv-installation' => [
            'title' => 'CCTV & Surveillance Installation',
            'subtitle' => 'High-Definition Digital IP Video Solutions',
            'icon' => 'ri-camera-lens-fill',
            'image' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80',
            'description' => 'NDS Security Services designs and installs enterprise-grade closed-circuit television systems across Noida. From thermal cameras for perimeter boundaries to smart dome cameras for high-traffic office floors, we customize system layouts to give complete coverage. Our IP camera feeds sync securely to local network recorders (NVRs) and mobile applications for remote viewing.',
            'benefits' => [
                'Vandal-resistant high-definition night-vision cameras',
                'Secure remote viewing via mobile and desktop client apps',
                'Advanced motion detection zones and instant alerts',
                'Integration with central NDS 24/7 Command Center dispatcher'
            ],
            'specs' => [
                'Camera Tech' => '4K Ultra-HD IP Dome/Bullet Cameras',
                'Night Vision' => 'Infrared & StarLight color night vision up to 40 meters',
                'Storage' => 'Local RAID NVR + Secure Cloud Backup storage',
                'Power' => 'Power over Ethernet (PoE) with battery backup systems'
            ],
            'faqs' => [
                [
                    'q' => 'Can I monitor the camera feeds when I am off-site?',
                    'a' => 'Yes. All our modern NVR systems support remote network streaming. Feeds can be viewed on iOS, Android, and Web applications with multi-factor authentication.'
                ],
                [
                    'q' => 'What happens to the cameras during a power outage?',
                    'a' => 'We bundle backup UPS systems that power cameras and recording units for up to 4-6 hours during power failures.'
                ]
            ]
        ],
        'monitoring-services' => [
            'title' => '24/7 Command & Monitoring Services',
            'subtitle' => 'Real-Time Oversight & Emergency Dispatch',
            'icon' => 'ri-radar-fill',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
            'description' => 'Our Noida-based central Command Center acts as the central brain of NDS operations. Our operators continuously monitor alarm inputs, CCTV video streams, and guard patrol paths. By combining technology with rapid response systems, we guarantee a 15-minute response arrival in case of alarms or incidents.',
            'benefits' => [
                'Real-time automated incident detection alerts',
                'GPS tracking of guard patrol paths and schedules',
                'Rapid response team dispatch (15-minute SLA Noida)',
                'Coordination with local law enforcement and fire units'
            ],
            'specs' => [
                'Oversight' => '24 hours / 7 days / 365 days monitoring',
                'Patrol Check' => 'QR Code tags along guard routes with active GPS sync',
                'SLA Response' => 'Noida & Greater Noida - Emergency team under 15 mins',
                'Uptime' => 'Redundant power grid connection + standby generators'
            ],
            'faqs' => [
                [
                    'q' => 'How does the rapid response team operate?',
                    'a' => 'When a high-priority alarm is triggered, our command center operators immediately dispatch the nearest NDS mobile patrol vehicle while alerting Noida police if necessary.'
                ],
                [
                    'q' => 'Is this service available for residential societies?',
                    'a' => 'Yes. We protect several premium Noida townships by monitoring main gate access, perimeter walls, and elevator SOS buttons.'
                ]
            ]
        ],
        'home-security-systems' => [
            'title' => 'Smart Home Security Systems',
            'subtitle' => 'Intelligent Intrusion Detection & Locks',
            'icon' => 'ri-home-shield-fill',
            'image' => 'https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80',
            'description' => 'Secure your home and family with NDS integrated smart residential panels. We fit sleek entry door sensors, high-decibel indoor sirens, wireless window vibration sensors, and smart locks that log every entry code. Manage access keys, check video doorbells, and arm/disarm systems directly from your mobile phone.',
            'benefits' => [
                'Vibration sensors for ground-floor glass panels',
                'Smart lock codes with automated family notification',
                'Silent panic alarms under threat scenarios',
                'Pet-immune motion detectors to avoid false alarms'
            ],
            'specs' => [
                'Lock Tech' => 'Grade-1 Deadbolt smart locks with mechanical backup',
                'Siren' => '105 dB interior siren with warning LED indicators',
                'Connectivity' => 'Dual-path wireless (Wi-Fi + 4G cellular backup)',
                'Installation' => 'Complete wireless setup (no drilling or damage)'
            ],
            'faqs' => [
                [
                    'q' => 'Do the motion sensors trigger if I have pets?',
                    'a' => 'No. We configure pet-immune motion sensors that ignore movement from animals weighing less than 25 kg.'
                ],
                [
                    'q' => 'Can I create temporary entry codes for visitors?',
                    'a' => 'Yes. The smartphone application allows you to issue temporary guest codes that expire after a set time or a single use.'
                ]
            ]
        ],
        'access-control-systems' => [
            'title' => 'Corporate Access Control Systems',
            'subtitle' => 'Biometric & Smart Credential Verification',
            'icon' => 'ri-fingerprint-fill',
            'image' => 'https://images.unsplash.com/photo-1614064641938-3bbee52942c7?auto=format&fit=crop&w=800&q=80',
            'description' => 'NDS Corporate Access Control setups regulate entry permissions across IT parks, corporate towers, and restricted server rooms. We integrate biometric fingerprint/face scanners, optical turnstiles, and RFID proximity card readers. Our systems record employee time logs and sync directly with standard HR payroll platforms.',
            'benefits' => [
                'Anti-passback rules to prevent credential sharing',
                'Automated visitor badge printing and gate pass logs',
                'Lockdown state triggers in emergency scenarios',
                'Sync with company fire alarms for auto-release gates'
            ],
            'specs' => [
                'Biometrics' => 'Vandal-proof optical fingerprint & 3D facial scanning',
                'Cards' => '13.56 MHz RFID smart cards with encryption',
                'Logs' => 'SQL-based local database with automated cloud backup',
                'Hardware' => 'Heavy-duty electromagnetic locks (600-1200 lbs hold)'
            ],
            'faqs' => [
                [
                    'q' => 'What happens to access doors in case of a fire alarm?',
                    'a' => 'Our systems are hardwired to the building fire panel. Upon alarm trigger, all magnetic locks automatically release to ensure safe evacuation.'
                ],
                [
                    'q' => 'Can we manage multiple office branches from one server?',
                    'a' => 'Yes. We set up cloud-based access control networks that let you manage badges and credentials across Noida, Gurgaon, and Delhi NCR from a single dashboard.'
                ]
            ]
        ],
        'smart-home-integration' => [
            'title' => 'Smart Building & Automation Integration',
            'subtitle' => 'Integrated IoT Environmental & Security Controls',
            'icon' => 'ri-cpu-fill',
            'image' => 'https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80',
            'description' => 'NDS combines automation controls with traditional security matrices. We integrate building management systems (BMS) with occupancy sensors, automated climate and lighting schedules, flood detectors, and gas leak sensors. This maximizes security while optimizing building energy usage.',
            'benefits' => [
                'Occupancy-triggered lighting to reduce power bills',
                'Smart glass-break detectors and gas leak alert sync',
                'Automatic HVAC adjustments based on room usage',
                'Central touchscreen management console for facilities'
            ],
            'specs' => [
                'Protocol' => 'Zigbee, Z-Wave, and BACnet standard integration',
                'Sensors' => 'Infrared occupancy, temperature, flood, gas leak',
                'Control' => 'Wall-mounted tablets + centralized cloud panel',
                'Optimizations' => 'Up to 20% energy saving in commercial buildings'
            ],
            'faqs' => [
                [
                    'q' => 'What types of environmental sensors do you offer?',
                    'a' => 'We offer water leak probes for server rooms, LPG/carbon monoxide gas sensors for cafeterias, and smart ambient temperature sensors.'
                ],
                [
                    'q' => 'Can this integrate with our existing HVAC systems?',
                    'a' => 'Yes, our controllers interface with standard HVAC protocols (BACnet/Modbus) to automate building climate cycles.'
                ]
            ]
        ],
        'alarm-systems-installation' => [
            'title' => 'Intruder & Fire Alarm Installation',
            'subtitle' => 'High-Sensitivity Perimeter & Fire Protection',
            'icon' => 'ri-alarm-warning-fill',
            'image' => 'https://images.unsplash.com/photo-1508873696983-2df515122519?auto=format&fit=crop&w=800&q=80',
            'description' => 'Protect your commercial warehouses and facilities from fire and intrusion. NDS designs fire safety layouts featuring high-sensitivity smoke detectors, emergency sirens, break-glass stations, and optical smoke barriers. Our fire protection plans strictly match local Noida authority NOC regulations.',
            'benefits' => [
                'Fully addressable fire panels for large warehouses',
                'Photoelectric smoke and thermal heat detector sync',
                'Wired emergency break-glass stations',
                'Linked reporting to city fire stations and NDS dispatch'
            ],
            'specs' => [
                'Panel Tech' => 'Multi-zone addressable fire and intruder panels',
                'Detectors' => 'Rate-of-rise thermal and photoelectric smoke sensors',
                'Sounders' => 'Dual-tone 110 dB electronic sirens with strobe lights',
                'Compliance' => 'NFPA and local Noida authority NOC standard compliance'
            ],
            'faqs' => [
                [
                    'q' => 'How often do fire alarm sensors need maintenance?',
                    'a' => 'To maintain reliability, we schedule quarterly audits to vacuum smoke sensors, test panel backups, and replace zone batteries.'
                ],
                [
                    'q' => 'Does NDS help in obtaining local Fire NOC clearances?',
                    'a' => 'Yes. We design and install the alarm network to match state fire guidelines and supply code certificates needed for NOC renewals.'
                ]
            ]
        ]
    ];

    public function mount(string $slug): void
    {
        $this->slug = $slug;

        if (!array_key_exists($slug, $this->servicesData)) {
            // Default fallback if slug is not found
            $this->service = $this->servicesData['cctv-installation'];
        } else {
            $this->service = $this->servicesData[$slug];
        }
    }

    public function render()
    {
        return view('pages.service.service')
            ->title($this->service['title'] . ' - NDS Security Services');
    }
};
