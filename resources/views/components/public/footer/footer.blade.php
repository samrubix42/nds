<footer class="w-full bg-white text-brownie border-t border-cream mt-auto">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-16 w-full">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Brand & Tagline -->
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-10 w-auto object-contain" />
                </div>
                <p class="text-xs text-coffee/95 leading-relaxed font-medium">
                    Delivering institutional trust, strength, and precision. Noida's premier security guard & facility management provider.
                </p>
                <!-- Social Icons -->
                <div class="flex items-center gap-3 mt-3">
                    @if(setting('facebook'))
                        <a href="{{ setting('facebook') }}" target="_blank" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="Facebook">
                            <i class="ri-facebook-fill text-sm"></i>
                        </a>
                    @endif
                    @if(setting('instagram'))
                        <a href="{{ setting('instagram') }}" target="_blank" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="Instagram">
                            <i class="ri-instagram-line text-sm"></i>
                        </a>
                    @endif
                    @if(setting('x'))
                        <a href="{{ setting('x') }}" target="_blank" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="X (Twitter)">
                            <i class="ri-twitter-x-line text-sm"></i>
                        </a>
                    @endif
                    @if(setting('whatsapp_number'))
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', setting('whatsapp_number')) }}" target="_blank" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="WhatsApp">
                            <i class="ri-whatsapp-line text-sm"></i>
                        </a>
                    @endif
                    <a href="mailto:{{ setting('email', 'info@ndssecurity.com') }}" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm" title="Email">
                        <i class="ri-mail-line text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xs font-black tracking-widest text-brownie uppercase mb-5">Quick Links</h4>
                <ul class="flex flex-col gap-3 text-xs font-semibold text-coffee/85">
                    <li><a href="{{ route('home') }}" class="hover:text-caramel transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-caramel transition-colors">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-caramel transition-colors">Solutions</a></li>
                    <li><a href="{{ route('clientele') }}" class="hover:text-caramel transition-colors">Major Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-caramel transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-xs font-black tracking-widest text-brownie uppercase mb-5">Our Services</h4>
                <ul class="flex flex-col gap-3 text-xs font-semibold text-coffee/85">
                    <li><a href="{{ route('service.detail', ['slug' => 'monitoring-services']) }}" class="hover:text-caramel transition-colors">Security Guard Services</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'access-control-systems']) }}" class="hover:text-caramel transition-colors">Corporate Protection</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'cctv-installation']) }}" class="hover:text-caramel transition-colors">CCTV & Wireless Surveillance</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'alarm-systems-installation']) }}" class="hover:text-caramel transition-colors">VIP / Escort Guard</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'smart-home-integration']) }}" class="hover:text-caramel transition-colors">Facility & Manpower</a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div class="flex flex-col gap-4">
                <h4 class="text-xs font-black tracking-widest text-brownie uppercase mb-5">Contact Details</h4>
                <div class="flex items-start gap-3 text-xs">
                    <i class="ri-map-pin-line text-caramel text-base mt-0.5"></i>
                    <p class="text-coffee/85 leading-relaxed font-semibold">
                        {!! nl2br(e(setting('address', 'Gaur City Mall Road, Noida, Uttar Pradesh, 201301'))) !!}
                    </p>
                </div>
                <div class="flex items-center gap-3 text-xs">
                    <i class="ri-phone-line text-caramel text-base"></i>
                    <div class="flex flex-col">
                        <a href="tel:{{ setting('phone_number', '+91 88005-93141') }}" class="text-coffee/85 font-bold hover:text-caramel transition-colors">{{ setting('phone_number', '+91 88005-93141') }}</a>
                        @if(setting('phone_number_2'))
                            <a href="tel:{{ setting('phone_number_2') }}" class="text-coffee/85 font-semibold hover:text-caramel transition-colors">{{ setting('phone_number_2') }}</a>
                        @endif
                    </div>
                </div>
                <div class="flex items-center gap-3 text-xs">
                    <i class="ri-mail-line text-caramel text-base"></i>
                    <a href="mailto:{{ setting('email', 'info@ndssecurityservices.com') }}" class="text-coffee/85 font-semibold hover:text-caramel transition-colors">{{ setting('email', 'info@ndssecurityservices.com') }}</a>
                </div>
                @if(setting('office_time'))
                    <div class="flex items-center gap-3 text-xs">
                        <i class="ri-time-line text-caramel text-base"></i>
                        <span class="text-coffee/85 font-semibold">{{ setting('office_time') }}</span>
                    </div>
                @endif
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="border-t border-cream mt-12 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-[11px] text-coffee/70 font-semibold">
            <p>© {{ date('Y') }} {{ setting('company_name', 'NDS Security Services') }}. All Rights Reserved.</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-caramel transition-colors">Privacy Policy</a>
                <span>•</span>
                <a href="#" class="hover:text-caramel transition-colors">Terms of Service</a>
                <span>•</span>
                <a href="#" class="hover:text-caramel transition-colors">ISO Certifications</a>
            </div>
        </div>
    </div>
</footer>