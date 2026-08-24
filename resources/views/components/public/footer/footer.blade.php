<footer class="w-full bg-white text-brownie border-t border-cream mt-auto">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-16 w-full">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Brand & Tagline -->
            <div class="flex flex-col gap-4">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3">
                    <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-10 w-auto object-contain" />
                </a>
                <p class="text-sm text-coffee/90 leading-relaxed font-medium">
                    Delivering institutional trust, strength, and precision. Noida's premier security guard & facility management provider.
                </p>
                <!-- Social Icons -->
                <div class="flex items-center gap-3 mt-3">
                    @if(setting('facebook'))
                        <a href="{{ setting('facebook') }}" target="_blank" class="w-9 h-9 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="Facebook">
                            <i class="ri-facebook-fill text-base"></i>
                        </a>
                    @endif
                    @if(setting('instagram'))
                        <a href="{{ setting('instagram') }}" target="_blank" class="w-9 h-9 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="Instagram">
                            <i class="ri-instagram-line text-base"></i>
                        </a>
                    @endif
                    @if(setting('x'))
                        <a href="{{ setting('x') }}" target="_blank" class="w-9 h-9 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="X (Twitter)">
                            <i class="ri-twitter-x-line text-base"></i>
                        </a>
                    @endif
                    @if(setting('whatsapp_number'))
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', setting('whatsapp_number')) }}" target="_blank" class="w-9 h-9 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="WhatsApp">
                            <i class="ri-whatsapp-line text-base"></i>
                        </a>
                    @endif
                    <a href="mailto:{{ setting('email', 'info@ndssecurityservices.com') }}" class="w-9 h-9 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="Email">
                        <i class="ri-mail-line text-base"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-sm font-extrabold tracking-wider text-brownie uppercase mb-5">Quick Links</h4>
                <ul class="flex flex-col gap-3 text-sm font-medium text-coffee/85">
                    <li><a href="{{ route('home') }}" wire:navigate class="hover:text-caramel transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" wire:navigate class="hover:text-caramel transition-colors">About Us</a></li>
                    <li><a href="{{ route('services') }}" wire:navigate class="hover:text-caramel transition-colors">Services</a></li>
                    <li><a href="{{ route('training') }}" wire:navigate class="hover:text-caramel transition-colors">Training</a></li>
                    <li><a href="{{ route('clientele') }}" wire:navigate class="hover:text-caramel transition-colors">Clientele</a></li>
                    <li><a href="{{ route('career') }}" wire:navigate class="hover:text-caramel transition-colors">Career & Jobs</a></li>
                    <li><a href="{{ route('gallery') }}" wire:navigate class="hover:text-caramel transition-colors">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" wire:navigate class="hover:text-caramel transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-sm font-extrabold tracking-wider text-brownie uppercase mb-5">Our Services</h4>
                <ul class="flex flex-col gap-3 text-sm font-medium text-coffee/85">
                    <li><a href="{{ route('service.detail', ['slug' => 'essential-services']) }}" wire:navigate class="hover:text-caramel transition-colors">Security Guard Services</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'specialised-services']) }}" wire:navigate class="hover:text-caramel transition-colors">Corporate Security</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'threat-mitigation']) }}" wire:navigate class="hover:text-caramel transition-colors">Threat Mitigation & Audits</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'on-demand-services']) }}" wire:navigate class="hover:text-caramel transition-colors">VIP Bouncers & Escorts</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'cctv-installation']) }}" wire:navigate class="hover:text-caramel transition-colors">CCTV & Surveillance</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'access-control-systems']) }}" wire:navigate class="hover:text-caramel transition-colors">Access Control Systems</a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div class="flex flex-col gap-4">
                <h4 class="text-sm font-extrabold tracking-wider text-brownie uppercase mb-5">Contact Details</h4>
                <div class="flex items-start gap-3 text-sm">
                    <i class="ri-map-pin-line text-caramel text-lg mt-0.5 shrink-0"></i>
                    <p class="text-coffee/85 leading-relaxed font-medium">
                        {!! nl2br(e(setting('address', 'Plot No. 128, Haibatpur, Near Gaur City Mall, Greater Noida - 201318 (U.P.)'))) !!}
                    </p>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <i class="ri-phone-line text-caramel text-lg shrink-0"></i>
                    <div class="flex flex-col">
                        <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="text-coffee/85 font-semibold hover:text-caramel transition-colors">{{ setting('phone_number', '+91 88005-93141') }}</a>
                        @if(setting('phone_number_2'))
                            <a href="tel:{{ setting('phone_number_2') }}" class="text-coffee/85 font-medium hover:text-caramel transition-colors">{{ setting('phone_number_2') }}</a>
                        @endif
                    </div>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <i class="ri-mail-line text-caramel text-lg shrink-0"></i>
                    <a href="mailto:{{ setting('email', 'info@ndssecurityservices.com') }}" class="text-coffee/85 font-medium hover:text-caramel transition-colors">{{ setting('email', 'info@ndssecurityservices.com') }}</a>
                </div>
                @if(setting('office_time'))
                    <div class="flex items-center gap-3 text-sm">
                        <i class="ri-time-line text-caramel text-lg shrink-0"></i>
                        <span class="text-coffee/85 font-medium">{{ setting('office_time') }}</span>
                    </div>
                @endif
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="border-t border-cream mt-12 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-coffee/80 font-medium">
            <p>© {{ date('Y') }} {{ setting('company_name', 'NDS Security Services') }}. All Rights Reserved.</p>
            <div class="flex gap-4 items-center">
                <span>Powered by <a href="https://techonika.com" target="_blank" rel="noopener noreferrer" class="hover:text-caramel text-brownie font-bold transition-colors">Techonika</a></span>
            </div>
        </div>
    </div>
</footer>