<footer class="w-full bg-cream text-brownie border-t-4 border-caramel mt-auto">
    <div class="px-6 md:px-12 py-12 w-full">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Brand & Tagline -->
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('logo.png') }}" alt="NDS Security Logo" class="h-10 w-auto object-contain" />
                    <span class="text-lg font-bold tracking-wider uppercase">NDS Security</span>
                </div>
                <p class="text-xs text-coffee leading-relaxed font-semibold">
                    Delivering institutional trust, strength, and precision. Noida's premier security guard & facility management provider.
                </p>
                <div class="flex items-center gap-3 mt-2">
                    <a href="#" class="w-8 h-8 rounded-[4px] bg-caramel/20 hover:bg-caramel hover:text-white text-brownie flex items-center justify-center transition-colors">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-[4px] bg-caramel/20 hover:bg-caramel hover:text-white text-brownie flex items-center justify-center transition-colors">
                        <i class="ri-mail-line"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-[4px] bg-caramel/20 hover:bg-caramel hover:text-white text-brownie flex items-center justify-center transition-colors">
                        <i class="ri-phone-line"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xs font-extrabold tracking-widest text-caramel uppercase mb-4 border-l-2 border-caramel pl-2">Quick Links</h4>
                <ul class="flex flex-col gap-2.5 text-xs font-semibold text-coffee">
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Home</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">About Us</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Solutions</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Major Projects</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-xs font-extrabold tracking-widest text-caramel uppercase mb-4 border-l-2 border-caramel pl-2">Our Services</h4>
                <ul class="flex flex-col gap-2.5 text-xs font-semibold text-coffee">
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Security Guard Services</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Corporate Protection</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">CCTV & Wireless Surveillance</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">VIP / Escort Guard</a></li>
                    <li><a href="#" class="hover:text-caramel hover:underline transition-all">Facility & Manpower</a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div class="flex flex-col gap-3">
                <h4 class="text-xs font-extrabold tracking-widest text-caramel uppercase mb-4 border-l-2 border-caramel pl-2">Contact Details</h4>
                <div class="flex items-start gap-2 text-xs">
                    <i class="ri-map-pin-line text-caramel text-base mt-0.5"></i>
                    <p class="text-coffee leading-relaxed font-semibold">
                        Gaur City Mall Road,<br />
                        Noida, Uttar Pradesh, 201301
                    </p>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <i class="ri-phone-line text-caramel text-base"></i>
                    <p class="text-coffee font-bold hover:text-caramel transition-colors">+91 99999 88888</p>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <i class="ri-mail-line text-caramel text-base"></i>
                    <p class="text-coffee font-semibold hover:text-caramel transition-colors">info@ndssecurity.com</p>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="border-t border-caramel/20 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-[11px] text-coffee/70 font-semibold">
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