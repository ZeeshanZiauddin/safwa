<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<main class="w-full py-8 md:py-12">
    <div class="max-w-[1320px] w-full mx-auto px-4 sm:px-6 lg:px-8">
        <!-- BREADCRUMB -->
        <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-7 pt-10">
            <a href="/" class="hover:text-[#b28b46] transition">Home</a>
            <i class="fa-solid fa-angle-right text-xs"></i>
            <a href="/umrah" class="hover:text-[#b28b46] transition">Umrah</a>
            <i class="fa-solid fa-angle-right text-xs"></i>
            <span class="text-[#9b793e] font-medium">Package Details</span>
        </div>

        <!-- MAIN GRID LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
            <!-- LEFT CONTENT -->
            <div class="lg:col-span-8 min-w-0 grid grid-cols-1 gap-6">

                <!-- PACKAGE HEADER -->
                <livewire:sections.umrah.package-header />
                <!-- pakge cards -->
                <livewire:sections.umrah.package-card />
                <!-- PACKAGE OVERVIEW -->
                <livewire:sections.umrah.package-overview />
                <!-- ACCOMMODATION -->
                <livewire:sections.umrah.accommodation />
                   <!-- IMAGE GALLERY -->
                <livewire:sections.umrah.gallery />
            </div>

            <!-- RIGHT BOOKING SIDEBAR -->
            <aside class="lg:col-span-4 min-w-0 grid grid-cols-1 gap-6 lg:sticky lg:top-6">

                <!-- BOOKING FORM CARD -->
                <div class="bg-white border border-[#eae6dc] rounded-2xl shadow-sm overflow-hidden">

                    <!-- FORM HEADER -->
                    <div class="bg-[#303b32] p-6 md:p-7 text-white">

                        <span class="text-[#d7b978] text-[10px] tracking-[2px] font-semibold">
                            START YOUR JOURNEY
                        </span>

                        <h2 class="text-2xl font-semibold mt-3 leading-snug">
                            Book Your
                            <strong class="text-[#d7b978]">Umrah Package</strong>
                        </h2>

                        <p class="text-gray-300 text-xs leading-6 mt-3">
                            Share your details and our team will contact you.
                        </p>

                    </div>

                    <!-- PRICE -->
                    <div class="p-6 bg-[#faf7f0] border-b border-[#eee5d4]">

                        <small class="text-[#9b793e] tracking-widest font-semibold text-[10px]">
                            PACKAGE PRICE
                        </small>

                        <h3 class="text-2xl font-semibold text-[#303b32] mt-2">
                            Request A Quote
                        </h3>

                        <p class="text-gray-500 text-xs mt-2">
                            Price depends on dates and accommodation.
                        </p>

                    </div>

                    <!-- FORM -->
                  <livewire:forms.package_list_form />

                </div>

                <!-- SIDEBAR SUPPORT -->
                <div class="bg-[#303b32] rounded-2xl p-6 text-white grid grid-cols-[auto_1fr] gap-4 items-start">

                    <div
                        class="w-12 h-12 rounded-xl bg-white/10 text-[#d7b978] flex items-center justify-center text-xl">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold">Need Help Booking?</h3>

                        <p class="text-gray-300 text-xs leading-6 mt-2">
                            Have questions? Contact our travel team.
                        </p>

                        <a href="/contact"
                            class="inline-flex items-center gap-2 text-[#d7b978] text-sm font-semibold mt-4 hover:text-white transition">
                            Contact Safwa
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

            </aside>

        </div>
    </div>
</main>
