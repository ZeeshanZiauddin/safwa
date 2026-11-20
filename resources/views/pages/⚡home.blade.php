<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>

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
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80" alt="Traveler">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&q=80" alt="Traveler">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80" alt="Traveler">
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
                        <div id="flights" class="booking-panel">

                            <h3 class="booking-title">Find Your Flight</h3>

                            <p class="booking-subtitle">
                                Plan your next journey with ease.
                            </p>

                            <form id="flightForm">

                                <div class="booking-field">
                                    <label>Departure City</label>
                                    <input type="text" name="departure" placeholder="Enter departure city" required>
                                </div>

                                <div class="booking-field">
                                    <label>Destination</label>
                                    <input type="text" name="destination" placeholder="Enter destination" required>
                                </div>

                                <div class="grid grid-cols-2 gap-3">

                                    <div class="booking-field">
                                        <label>Departure Date</label>
                                        <input type="date" name="departure_date" required>
                                    </div>

                                    <div class="booking-field">
                                        <label>Return Date</label>
                                        <input type="date" name="return_date">
                                    </div>

                                </div>

                                <div class="booking-field">
                                    <label>Passengers</label>
                                    <select name="passengers">
                                        <option value="1">1 Passenger</option>
                                        <option value="2">2 Passengers</option>
                                        <option value="3">3 Passengers</option>
                                        <option value="4">4 Passengers</option>
                                        <option value="5">5+ Passengers</option>
                                    </select>
                                </div>

                                <button type="submit" class="gold-btn booking-submit">
                                    Search Flights
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>

                            </form>

                        </div>


                        <!-- UMRAH FORM -->
                        <div id="umrah" class="booking-panel hidden">

                            <h3 class="booking-title">Plan Your Umrah</h3>

                            <p class="booking-subtitle">
                                Begin your spiritual journey with Safwa.
                            </p>

                            <form id="umrahForm">

                                <div class="booking-field">
                                    <label>Choose Package</label>

                                    <select name="package" required>
                                        <option value="">Select Umrah Package</option>
                                        <option>Economy Umrah</option>
                                        <option>Standard Umrah</option>
                                        <option>Premium Umrah</option>
                                        <option>VIP Umrah</option>
                                    </select>
                                </div>

                                <div class="booking-field">
                                    <label>Departure City</label>

                                    <select name="city" required>
                                        <option value="">Select City</option>
                                        <option>Lahore</option>
                                        <option>Karachi</option>
                                        <option>Islamabad</option>
                                        <option>Multan</option>
                                        <option>Peshawar</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="grid grid-cols-2 gap-3">

                                    <div class="booking-field">
                                        <label>Travel Date</label>
                                        <input type="date" name="travel_date" required>
                                    </div>

                                    <div class="booking-field">
                                        <label>Travelers</label>
                                        <select name="travelers">
                                            <option>1 Person</option>
                                            <option>2 Persons</option>
                                            <option>3 Persons</option>
                                            <option>4 Persons</option>
                                            <option>5+ Persons</option>
                                        </select>
                                    </div>

                                </div>

                                <button type="submit" class="gold-btn booking-submit">
                                    Explore Packages
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>

                            </form>

                        </div>

                        <p class="text-center text-xs text-gray-400 mt-4">
                            <i class="fa-solid fa-shield-halved text-yellow-600 mr-1"></i>
                            Your journey begins with trust.
                        </p>

                    </div>

                </div>

            </div>
        </div>

    </section>

</div>