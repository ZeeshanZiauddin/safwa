<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="py-24 bg-[#111111] relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#C9A227]/10 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-[#C9A227]/10 rounded-full blur-[100px]"></div>

    <div class="container mx-auto px-5 lg:px-10 relative z-10">

        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <span class="section-label">WHAT DRIVES US</span>
            <h2 class="text-white text-4xl md:text-5xl font-bold mt-5">
                Our Purpose,
                <span class="gold-text">Our Promise.</span>
            </h2>
            <p class="text-white/55 mt-5 leading-8">
                The values that shape every experience we aim to deliver.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-7">

            <div class="dark-info-card reveal">
                <div class="dark-icon"><i class="fa-solid fa-bullseye"></i></div>
                <span class="text-[#E8D18A] uppercase text-xs tracking-[3px] font-semibold">OUR MISSION</span>
                <h3 class="text-white text-3xl font-bold mt-4">Making Every Journey Meaningful.</h3>
                <p class="text-white/60 leading-8 mt-5">
                    Our mission is to provide thoughtful travel solutions,
                    reliable guidance and personalized assistance that help
                    travelers enjoy their journeys with greater comfort
                    and confidence.
                </p>
                <div class="gold-line mt-8"></div>
            </div>

            <div class="dark-info-card reveal">
                <div class="dark-icon"><i class="fa-solid fa-eye"></i></div>
                <span class="text-[#E8D18A] uppercase text-xs tracking-[3px] font-semibold">OUR VISION</span>
                <h3 class="text-white text-3xl font-bold mt-4">A Name Travelers Can Trust.</h3>
                <p class="text-white/60 leading-8 mt-5">
                    Our vision is to build lasting relationships with travelers
                    by becoming a trusted choice for meaningful journeys,
                    dedicated service and memorable travel experiences.
                </p>
                <div class="gold-line mt-8"></div>
            </div>

        </div>
    </div>
</section>
