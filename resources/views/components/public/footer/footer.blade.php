<footer class="w-full bg-white text-brownie border-t border-cream mt-auto">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-16 w-full">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Brand & Tagline -->
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-10 w-auto object-contain" />
                    <span class="text-base font-black tracking-wider uppercase text-brownie">NDS Security</span>
                </div>
                <p class="text-xs text-coffee/95 leading-relaxed font-medium">
                    Delivering institutional trust, strength, and precision. Noida's premier security guard & facility management provider.
                </p>
                <!-- Social Icons -->
                <div class="flex items-center gap-3 mt-3">
                    <a href="#" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm">
                        <i class="ri-facebook-fill text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm">
                        <i class="ri-mail-line text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-cream/40 border border-cream/80 hover:bg-caramel hover:text-white hover:border-caramel text-coffee flex items-center justify-center transition-all duration-300 shadow-sm">
                        <i class="ri-phone-line text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xs font-black tracking-widest text-brownie uppercase mb-5">Quick Links</h4>
                <ul class="flex flex-col gap-3 text-xs font-semibold text-coffee/85">
                    <li><a href="#" class="hover:text-caramel transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">Solutions</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">Major Projects</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-xs font-black tracking-widest text-brownie uppercase mb-5">Our Services</h4>
                <ul class="flex flex-col gap-3 text-xs font-semibold text-coffee/85">
                    <li><a href="#" class="hover:text-caramel transition-colors">Security Guard Services</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">Corporate Protection</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">CCTV & Wireless Surveillance</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">VIP / Escort Guard</a></li>
                    <li><a href="#" class="hover:text-caramel transition-colors">Facility & Manpower</a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div class="flex flex-col gap-4">
                <h4 class="text-xs font-black tracking-widest text-brownie uppercase mb-5">Contact Details</h4>
                <div class="flex items-start gap-3 text-xs">
                    <i class="ri-map-pin-line text-caramel text-base mt-0.5"></i>
                    <p class="text-coffee/85 leading-relaxed font-semibold">
                        Gaur City Mall Road,<br />
                        Noida, Uttar Pradesh, 201301
                    </p>
                </div>
                <div class="flex items-center gap-3 text-xs">
                    <i class="ri-phone-line text-caramel text-base"></i>
                    <p class="text-coffee/85 font-bold hover:text-caramel transition-colors">+91 99999 88888</p>
                </div>
                <div class="flex items-center gap-3 text-xs">
                    <i class="ri-mail-line text-caramel text-base"></i>
                    <p class="text-coffee/85 font-semibold hover:text-caramel transition-colors">info@ndssecurity.com</p>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="border-t border-cream mt-12 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-[11px] text-coffee/70 font-semibold">
            <p>© {{ date('Y') }} NDS Security Services. All Rights Reserved.</p>
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