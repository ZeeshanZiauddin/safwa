<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section id="our-story" class="py-24 bg-white relative">
    <div class="container mx-auto px-5 lg:px-10">

        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <span class="section-label">OUR STORY</span>
            <h2 class="section-title mt-5">
                Built Around Your
                <span class="gold-text">Journey.</span>
            </h2>
            <p class="text-gray-500 leading-8 mt-5">
                We understand that travel is more than reaching a destination.
                It is about the people, the experiences and the memories
                created along the way.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div class="relative reveal order-2 lg:order-1">
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=600&q=85"
                        class="rounded-3xl w-full h-64 object-cover mt-12" alt="Travel and spiritual experience" />
                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=600&q=85"
                        class="rounded-3xl w-full h-64 object-cover" alt="Islamic architecture" />
                </div>
                <div class="absolute inset-0 pointer-events-none rounded-3xl border border-[#C9A227]/20 -m-3"></div>
            </div>

            <div class="reveal order-1 lg:order-2">
                <span class="section-label">THE SAFWA DIFFERENCE</span>
                <h2 class="section-title mt-5">
                    Every Detail Matters.
                </h2>

                <p class="text-gray-600 leading-8 mt-6">
                    Planning a journey can involve many decisions. From choosing
                    the right package to understanding travel arrangements,
                    we aim to provide helpful guidance throughout the process.
                </p>

                <p class="text-gray-600 leading-8 mt-4">
                    Our approach is built on personal attention, clear
                    communication and a commitment to making your experience
                    as convenient as possible.
                </p>

                <div class="space-y-5 mt-8">

                    <div class="flex gap-4 items-start">
                        <div class="feature-icon"><i class="fa-solid fa-heart"></i></div>
                        <div>
                            <h4 class="font-bold text-[#111111]">Care In Every Step</h4>
                            <p class="text-gray-500 text-sm mt-1">Thoughtful support from planning to your journey.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="feature-icon"><i class="fa-solid fa-handshake"></i></div>
                        <div>
                            <h4 class="font-bold text-[#111111]">A Trust-Focused Approach</h4>
                            <p class="text-gray-500 text-sm mt-1">Clear guidance and attentive communication.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="feature-icon"><i class="fa-solid fa-compass"></i></div>
                        <div>
                            <h4 class="font-bold text-[#111111]">Travel Made Easier</h4>
                            <p class="text-gray-500 text-sm mt-1">Helpful arrangements tailored to your travel needs.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
