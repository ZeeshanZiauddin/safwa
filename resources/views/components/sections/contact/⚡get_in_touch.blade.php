<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

    <section class="py-20 md:py-24 px-4 sm:px-6 bg-white">

        <div class="max-w-7xl mx-auto">

            <!-- HEADING -->
            <div class="text-center max-w-2xl mx-auto mb-14">

                <span class="text-gold font-bold text-xs tracking-[3px]">
                    GET IN TOUCH
                </span>

                <h2 class="font-elegant text-3xl md:text-5xl font-bold mt-4">
                    Let's Start Your <span class="text-gold">Journey</span>
                </h2>

                <p class="text-gray-500 text-sm leading-7 mt-5">
                    We would love to hear from you. Send us a message
                    and our team will get back to you as soon as possible.
                </p>

                <div class="w-16 h-[2px] bg-gold mx-auto mt-7"></div>

            </div>


            <!-- MAIN GRID -->
            <div
                class="grid lg:grid-cols-5 rounded-2xl overflow-hidden shadow-[0_15px_55px_rgba(0,0,0,0.08)] border border-gray-100">

                <!-- LEFT CONTACT INFORMATION -->
                <div class="lg:col-span-2 p-8 md:p-11 text-white relative overflow-hidden left-contact-section bg-dark">

                    <div class="absolute -right-20 -bottom-20 w-64 h-64 rounded-full border border-gold/20"></div>
                    <div class="absolute -right-10 -bottom-10 w-44 h-44 rounded-full border border-gold/20"></div>

                    <div class="relative z-10">

                        <span class="text-gold text-xs font-bold tracking-[3px]">
                            CONTACT INFORMATION
                        </span>

                        <h3 class="font-elegant text-2xl md:text-3xl font-bold mt-4 leading-snug">
                            We're Always Ready
                            <br>
                            To Help You
                        </h3>

                        <p class="text-gray-400 text-sm leading-7 mt-4 mb-10">
                            Reach out to us for travel bookings,
                            Umrah packages or any general inquiries.
                            Our team is always happy to assist you.
                        </p>


                        <!-- PHONE -->
                        <div class="contact-info-item flex items-center gap-4 mb-8">

                            <div
                                class="info-icon w-12 h-12 shrink-0 rounded-xl bg-gold/15 text-gold flex items-center justify-center">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div>
                                <span class="block text-gray-400 text-xs mb-1">Call Us</span>
                                <a href="tel:+923001234567" class="text-white text-sm font-semibold hover:text-gold">
                                    +92 300 1234567
                                </a>
                            </div>

                        </div>


                        <!-- EMAIL -->
                        <div class="contact-info-item flex items-center gap-4 mb-8">

                            <div
                                class="info-icon w-12 h-12 shrink-0 rounded-xl bg-gold/15 text-gold flex items-center justify-center">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>
                                <span class="block text-gray-400 text-xs mb-1">Email Address</span>
                                <a href="mailto:info@safwatravel.com"
                                    class="text-white text-sm font-semibold hover:text-gold">
                                    info@safwatravel.com
                                </a>
                            </div>

                        </div>


                        <!-- LOCATION -->
                        <div class="contact-info-item flex items-center gap-4 mb-8">

                            <div
                                class="info-icon w-12 h-12 shrink-0 rounded-xl bg-gold/15 text-gold flex items-center justify-center">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <span class="block text-gray-400 text-xs mb-1">Our Office</span>
                                <span class="text-white text-sm font-semibold">Pakistan</span>
                            </div>

                        </div>


                        <!-- WORKING HOURS -->
                        <div class="contact-info-item flex items-center gap-4 mb-9">

                            <div
                                class="info-icon w-12 h-12 shrink-0 rounded-xl bg-gold/15 text-gold flex items-center justify-center">
                                <i class="fa-regular fa-clock"></i>
                            </div>

                            <div>
                                <span class="block text-gray-400 text-xs mb-1">Working Hours</span>
                                <span class="text-white text-sm font-semibold">Monday - Saturday</span>
                            </div>

                        </div>


                        <!-- SOCIAL MEDIA -->
                        <div class="border-t border-white/15 pt-7">

                            <span class="text-gold text-xs font-bold tracking-[2px]">
                                FOLLOW US
                            </span>

                            <div class="flex gap-3 mt-5">

                                <a href="#"
                                    class="social-link w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-white text-sm">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href="#"
                                    class="social-link w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-white text-sm">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>

                                <a href="#"
                                    class="social-link w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-white text-sm">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>

                                <a href="#"
                                    class="social-link w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-white text-sm">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>

                            </div>

                        </div>

                    </div>
                </div>


                <!-- RIGHT CONTACT FORM -->
                <div class="lg:col-span-3 p-7 sm:p-10 md:p-12 bg-white">

                    <div class="mb-9">

                        <span class="text-gold text-xs font-bold tracking-[3px]">
                            SEND US A MESSAGE
                        </span>

                        <h3 class="font-elegant text-2xl md:text-3xl font-bold mt-3">
                            How Can We Help You?
                        </h3>

                        <p class="text-gray-500 text-sm mt-3">
                            Fill out the form below and we'll contact you.
                        </p>

                    </div>

   <livewire:forms.contact />
                  
                 

                </div>

            </div>

        </div>

    </section>