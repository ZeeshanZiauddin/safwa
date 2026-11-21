<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="hero-section flex items-center justify-center">

    <div class="max-w-7xl mx-auto px-5 w-full relative z-10">

        <div class="grid lg:grid-cols-12 gap-10 items-center">

            <!-- HERO CONTENT -->
            <div class="lg:col-span-7 hero-content">

                <p class="hero-subtitle">
                    <i class="fa-solid fa-star mr-2"></i>
                    YOUR JOURNEY, OUR RESPONSIBILITY
                </p>

                <h1 class="hero-title">
                    A Journey of
                    <span>Faith</span>,
                    Peace & Spirituality
                </h1>

                <p class="hero-description">
                    Let us make your sacred journey effortless and memorable.
                    Experience exceptional travel arrangements, comfortable
                    accommodation and dedicated support throughout your Umrah.
                </p>

                <div class="hero-buttons">

                    <a href="umrah-list.html" class="gold-btn">
                        Explore Umrah Packages
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="about.html" class="outline-btn border-white text-white hover:text-black">
                        Discover Safwa
                    </a>

                </div>

                <div class="hero-trust">

                    <div class="trust-avatars">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80"
                            alt="Traveler">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&q=80"
                            alt="Traveler">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80"
                            alt="Traveler">
                    </div>

                    <div>
                        <strong class="text-white">Your Trust Matters</strong>
                        <p class="text-gray-300 text-xs mt-1">
                            Dedicated support for your sacred journey
                        </p>
                    </div>

                </div>

            </div>


            <!-- BOOKING CARD -->
            <div class="lg:col-span-5">

                <div class="booking-card">

                    <div class="booking-tabs">

                        <button class="booking-tab active" data-tab="flights">
                            <i class="fa-solid fa-plane mr-2"></i>
                            Flights
                        </button>

                        <button class="booking-tab" data-tab="umrah">
                            <i class="fa-solid fa-kaaba mr-2"></i>
                            Umrah Packages
                        </button>

                    </div>


                    <!-- FLIGHT FORM -->
                    <livewire:forms.flight />
                    <!-- UMRAH FORM -->
                    <livewire:forms.umrah />

                    <p class="text-center text-xs text-gray-400 mt-4">
                        <i class="fa-solid fa-shield-halved text-yellow-600 mr-1"></i>
                        Your journeys begins with trust.
                    </p>
                </div>

            </div>

        </div>
    </div>

</section>
