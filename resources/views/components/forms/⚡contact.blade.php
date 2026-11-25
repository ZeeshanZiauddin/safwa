<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
       <form id="contactForm" class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-5">
                            
                            <div>
                                <label for="name" class="block text-xs font-bold text-gray-700 mb-2">
                                    Full Name *
                                </label>

                                <input type="text" id="name" name="name" required placeholder="Enter your full name"
                                    class="contact-field w-full h-12 px-4 bg-cream border border-gray-200 rounded-lg text-sm">
                            </div>


                            <div>
                                <label for="email" class="block text-xs font-bold text-gray-700 mb-2">
                                    Email Address *
                                </label>

                                <input type="email" id="email" name="email" required placeholder="Enter your email"
                                    class="contact-field w-full h-12 px-4 bg-cream border border-gray-200 rounded-lg text-sm">
                            </div>


                            <div>
                                <label for="phone" class="block text-xs font-bold text-gray-700 mb-2">
                                    Phone Number *
                                </label>

                                <input type="tel" id="phone" name="phone" required placeholder="+92 300 1234567"
                                    class="contact-field w-full h-12 px-4 bg-cream border border-gray-200 rounded-lg text-sm">
                            </div>


                            <div>
                                <label for="subject" class="block text-xs font-bold text-gray-700 mb-2">
                                    Subject *
                                </label>

                                <select id="subject" name="subject" required
                                    class="contact-field w-full h-12 px-4 bg-cream border border-gray-200 rounded-lg text-sm text-gray-500">
                                    <option value="">Select Subject</option>
                                    <option>Umrah Packages</option>
                                    <option>Flight Booking</option>
                                    <option>Hotel Booking</option>
                                    <option>General Inquiry</option>
                                    <option>Other</option>
                                </select>
                            </div>

                        </div>


                        <!-- MESSAGE -->
                        <div>

                            <label for="message" class="block text-xs font-bold text-gray-700 mb-2">
                                Your Message *
                            </label>

                            <textarea id="message" name="message" rows="5" required
                                placeholder="Write your message here..."
                                class="contact-field w-full p-4 bg-cream border border-gray-200 rounded-lg text-sm resize-y"></textarea>

                        </div>


                        <!-- BUTTON -->
                        <button type="submit"
                            class="contact-btn inline-flex items-center justify-center gap-3 bg-gold text-white px-8 py-4 rounded-lg text-sm font-bold">
                            Send Message
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>


                        <div id="successMessage"
                            class="hidden bg-green-50 border border-green-200 text-green-700 text-sm p-4 rounded-lg">
                            <i class="fa-solid fa-circle-check mr-2"></i>
                            Your message has been submitted successfully!
                        </div>

                    </form>
</div>