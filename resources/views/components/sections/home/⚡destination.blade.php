<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="destination-section section-padding">

    <div class="max-w-7xl mx-auto px-5">

        <div class="text-center mb-12">

            <div class="section-label">SACRED DESTINATIONS</div>

            <h2 class="section-heading">
                Explore The <span class="gold-text">Holy Cities</span>
            </h2>

            <p class="text-gray-500 text-xs mt-4">
                Experience the beauty and spirituality of Makkah and Madinah.
            </p>

        </div>


        <div class="grid md:grid-cols-2 gap-7">

            <a href="umrah.html" class="destination-card">

                <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=1100&q=85"
                    alt="Makkah">

                <div class="destination-content">
                    <span>THE HOLY CITY</span>
                    <h3>Makkah Al Mukarramah</h3>
                    <p class="text-gray-200 text-xs mt-2">
                        Begin your spiritual journey at the sacred Kaaba.
                    </p>
                </div>

            </a>


            <a href="umrah.html" class="destination-card">

                <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=1100&q=85"
                    alt="Madinah">

                <div class="destination-content">
                    <span>THE CITY OF PEACE</span>
                    <h3>Madinah Al Munawwarah</h3>
                    <p class="text-gray-200 text-xs mt-2">
                        Discover the peaceful atmosphere of Madinah.
                    </p>
                </div>

            </a>

        </div>

    </div>

</section>
