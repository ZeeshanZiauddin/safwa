<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="py-20 lg:py-28 bg-[#F8F6F0]">
    <div class="container mx-auto px-5 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <div class="reveal">
                <span class="section-label">WELCOME TO SAFWA</span>

                <h2 class="section-title mt-5">
                    More Than Travel,
                    <span class="gold-text">A Journey Of Trust.</span>
                </h2>

                <p class="text-gray-600 leading-8 mt-6">
                    Every journey begins with a dream. At Safwa Travel,
                    our purpose is to help turn those dreams into memorable
                    experiences through thoughtful planning and dedicated
                    travel assistance.
                </p>

                <p class="text-gray-600 leading-8 mt-4">
                    Whether you are preparing for Umrah, planning a Hajj
                    journey or exploring a new destination with your family,
                    we aim to make every step simpler, smoother and more
                    comfortable.
                </p>

                <a href="#our-story"
                    class="inline-flex items-center gap-3 mt-8 font-semibold text-[#A88619] hover:gap-5 transition-all">
                    Get To Know Us
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="relative reveal">
                <div class="story-image-main rounded-[30px] overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=1000&q=85"
                        alt="Makkah pilgrimage" class="w-full h-[450px] object-cover" />
                </div>

                <div
                    class="absolute -bottom-7 -left-3 md:-left-8 bg-white rounded-2xl shadow-xl p-5 md:p-7 max-w-[240px] border border-[#C9A227]/20">
                    <div
                        class="w-12 h-12 rounded-full bg-[#F5EBD0] flex items-center justify-center text-[#A88619] text-xl mb-3">
                        <i class="fa-solid fa-kaaba"></i>
                    </div>
                    <h3 class="text-[#111111] font-bold text-lg">A Journey With Purpose</h3>
                    <p class="text-gray-500 text-sm mt-2 leading-6">
                        Your comfort and peace of mind matter at every step.
                    </p>
                </div>

                <div class="absolute -top-5 -right-4 w-24 h-24 border-[10px] border-[#C9A227]/20 rounded-full"></div>
            </div>

        </div>
    </div>
</section>
