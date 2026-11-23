<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="about-hero relative min-h-[600px] lg:min-h-[690px] flex items-center">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=2000&q=90"
            alt="Sacred journey to Makkah" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/85 to-black/30"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/10"></div>
    </div>

    <div class="container mx-auto px-5 lg:px-10 relative z-10 py-24">
        <div class="max-w-3xl reveal">

            <span
                class="inline-flex items-center gap-3 text-[#E8D18A] uppercase tracking-[4px] text-xs font-semibold mb-7">
                <span class="w-10 h-[1px] bg-[#C9A227]"></span>
                Discover Safwa
            </span>

            <h1 class="text-white text-5xl sm:text-6xl lg:text-7xl font-bold leading-[1.12] mb-7">
                Your Sacred Journey
                <span class="gold-text block">Begins With Us.</span>
            </h1>

            <p class="text-white/75 text-base sm:text-lg leading-8 max-w-xl mb-9">
                At Safwa, we believe every journey deserves care, comfort
                and peace of mind. We are here to make your travel dreams
                and sacred journeys meaningful.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#our-story" class="gold-btn">
                    Explore Our Story
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>

                <a href="#our-services" class="outline-btn">
                    Discover Our Services
                </a>
            </div>

        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-[#F8F6F0] to-transparent"></div>
</section>
