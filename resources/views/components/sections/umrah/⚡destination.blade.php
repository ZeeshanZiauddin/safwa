<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="py-24 bg-white">

    <div class="container mx-auto px-5 lg:px-10">

        <div class="text-center max-w-2xl mx-auto mb-16 reveal">

            <span class="section-label">HOLY DESTINATIONS</span>

            <h2 class="section-title mt-5">
                Discover The Beauty Of
                <span class="gold-text">Makkah & Madinah.</span>
            </h2>

            <p class="text-gray-500 mt-5 leading-8">
                Explore the two blessed destinations that make
                your Umrah journey so special.
            </p>

        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- MAKKAH -->

            <div class="destination-card reveal">

                <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=1000&q=90"
                    alt="Makkah and Kaaba" />

                <div class="destination-overlay">

                    <span>THE HOLY CITY</span>

                    <h3>Makkah Al Mukarramah</h3>

                    <p>
                        Experience the sacred atmosphere of Masjid Al Haram
                        and the Holy Kaaba.
                    </p>

                    <a href="#umrah-packages">
                        Explore Umrah Options
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>

                </div>

            </div>


            <!-- MADINAH -->

            <div class="destination-card reveal">

                <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=1000&q=90"
                    alt="Madinah Islamic architecture" />

                <div class="destination-overlay">

                    <span>THE CITY OF THE PROPHET ﷺ</span>

                    <h3>Madinah Al Munawwarah</h3>

                    <p>
                        Discover the peaceful atmosphere and beautiful
                        surroundings of the Prophet's Mosque.
                    </p>

                    <a href="#umrah-packages">
                        Explore Umrah Options
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
