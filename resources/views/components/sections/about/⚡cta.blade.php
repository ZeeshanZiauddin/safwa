<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="about-cta relative py-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=2000&q=85"
            alt="Sacred destination" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/80"></div>
    </div>

    <div class="container mx-auto px-5 lg:px-10 relative z-10 text-center reveal">
        <span class="text-[#E8D18A] uppercase tracking-[4px] text-xs font-semibold">
            LET'S PLAN SOMETHING MEANINGFUL
        </span>

        <h2 class="text-white text-4xl md:text-6xl font-bold mt-6 leading-tight">
            Ready To Begin Your
            <span class="gold-text block">Next Journey?</span>
        </h2>

        <p class="text-white/70 max-w-xl mx-auto leading-8 mt-6">
            Whether it is a sacred journey or a family adventure,
            let Safwa help you take the next step.
        </p>

        <a href="/contact" class="gold-btn mt-9 inline-flex">
            Contact Our Team
            <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>
