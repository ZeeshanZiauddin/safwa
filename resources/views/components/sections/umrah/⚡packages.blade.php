<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

  <section id="umrah-packages" class="py-24 bg-[#F8F6F0] relative">

            <div class="container mx-auto px-5 lg:px-10">

                <div class="text-center max-w-3xl mx-auto mb-14 reveal">

                    <span class="section-label">EXPLORE OUR UMRAH OPTIONS</span>

                    <h2 class="section-title mt-5">
                        Find The Right
                        <span class="gold-text">Umrah Package.</span>
                    </h2>

                    <p class="text-gray-500 leading-8 mt-5">
                        Every traveler has different preferences.
                        Explore our package categories and contact our team
                        for current availability and pricing.
                    </p>

                </div>


                <!-- PACKAGE FILTERS -->

                <div class="flex flex-wrap justify-center gap-3 mb-12 reveal">

                    <button class="package-filter active" data-filter="all">
                        All Packages
                    </button>

                    <button class="package-filter" data-filter="economy">
                        Economy
                    </button>

                    <button class="package-filter" data-filter="standard">
                        Standard
                    </button>

                    <button class="package-filter" data-filter="premium">
                        Premium
                    </button>

                </div>


                <!-- PACKAGE CARDS -->

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- ECONOMY -->

                    <article class="package-card reveal" data-category="economy">

                        <div class="package-image">

                            <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=900&q=85"
                                alt="Economy Umrah package" />

                            <span class="package-category">ECONOMY</span>

                        </div>

                        <div class="p-7">

                            <div class="flex items-center justify-between gap-3">

                                <span class="text-xs uppercase tracking-wider text-[#A88619] font-bold">
                                    Essential Comfort
                                </span>

                                <i class="fa-solid fa-star text-[#C9A227]"></i>

                            </div>

                            <h3 class="text-2xl font-bold text-[#111111] mt-3">
                                Economy Umrah
                            </h3>

                            <p class="text-gray-500 text-sm leading-7 mt-3">
                                An option for travelers looking for practical
                                and budget-conscious travel arrangements.
                            </p>

                            <div class="package-divider"></div>

                            <ul class="package-features">

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Accommodation options
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Flight arrangement assistance
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Transportation options
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Travel guidance
                                </li>

                            </ul>

                            <div class="package-price">
                                <div>
                                    <span>Package Price</span>
                                    <h4>Request a Quote</h4>
                                </div>
                                <div class="price-icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>

                            <a href="/contact?package=economy-umrah" class="package-btn">
                                Enquire Now
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </article>


                    <!-- STANDARD -->

                    <article class="package-card featured-package reveal" data-category="standard">

                        <div class="featured-ribbon">
                            POPULAR OPTION
                        </div>

                        <div class="package-image">

                            <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=900&q=85"
                                alt="Standard Umrah package" />

                            <span class="package-category">STANDARD</span>

                        </div>

                        <div class="p-7">

                            <div class="flex items-center justify-between gap-3">

                                <span class="text-xs uppercase tracking-wider text-[#A88619] font-bold">
                                    Enhanced Comfort
                                </span>

                                <i class="fa-solid fa-crown text-[#C9A227]"></i>

                            </div>

                            <h3 class="text-2xl font-bold text-[#111111] mt-3">
                                Standard Umrah
                            </h3>

                            <p class="text-gray-500 text-sm leading-7 mt-3">
                                A balanced travel option for those seeking
                                additional comfort and convenient arrangements.
                            </p>

                            <div class="package-divider"></div>

                            <ul class="package-features">

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Selected accommodation options
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Flight arrangement assistance
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Transport arrangements
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Travel planning assistance
                                </li>

                            </ul>

                            <div class="package-price">
                                <div>
                                    <span>Package Price</span>
                                    <h4>Request a Quote</h4>
                                </div>
                                <div class="price-icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>

                            <a href="/contact?package=standard-umrah" class="package-btn">
                                Enquire Now
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </article>


                    <!-- PREMIUM -->

                    <article class="package-card reveal" data-category="premium">

                        <div class="package-image">

                            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=900&q=85"
                                alt="Premium hotel accommodation" />

                            <span class="package-category">PREMIUM</span>

                        </div>

                        <div class="p-7">

                            <div class="flex items-center justify-between gap-3">

                                <span class="text-xs uppercase tracking-wider text-[#A88619] font-bold">
                                    Premium Comfort
                                </span>

                                <i class="fa-solid fa-gem text-[#C9A227]"></i>

                            </div>

                            <h3 class="text-2xl font-bold text-[#111111] mt-3">
                                Premium Umrah
                            </h3>

                            <p class="text-gray-500 text-sm leading-7 mt-3">
                                An enhanced travel experience with premium
                                accommodation and arrangements subject to availability.
                            </p>

                            <div class="package-divider"></div>

                            <ul class="package-features">

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Premium hotel options
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Flight assistance
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Convenient transport options
                                </li>

                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Personalized travel assistance
                                </li>

                            </ul>

                            <div class="package-price">
                                <div>
                                    <span>Package Price</span>
                                    <h4>Request a Quote</h4>
                                </div>
                                <div class="price-icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>

                            <a href="/contact?package=premium-umrah" class="package-btn">
                                Enquire Now
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>

                        </div>

                    </article>

                </div>

                <p class="text-center text-xs text-gray-400 mt-9 leading-6">
                    Package inclusions, hotels, flight availability, duration
                    and prices are confirmed at the time of enquiry.
                </p>

            </div>
        </section>
