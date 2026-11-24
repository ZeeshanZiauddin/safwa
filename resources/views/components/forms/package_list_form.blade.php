<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<form id="umrahBookingForm" wire:submit class="p-5 md:p-6">

    <input type="hidden" name="package_name" value="Premium Umrah Package 2026">

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

        <!-- NAME -->
        <div class="sm:col-span-2">
            <label for="name" class="block text-xs font-semibold text-gray-600 mb-2">Full Name *</label>
            <div class="relative">
                <i class="fa-regular fa-user absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48]"></i>
                <input type="text" id="name" name="name" placeholder="Your full name" minlength="3"
                    maxlength="100" required
                    class="w-full border border-gray-200 rounded-lg py-3 pl-11 pr-3 text-sm outline-none focus:border-[#b18a48] transition">
            </div>
        </div>

        <!-- EMAIL -->
        <div class="sm:col-span-2">
            <label for="email" class="block text-xs font-semibold text-gray-600 mb-2">Email Address *</label>
            <div class="relative">
                <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48]"></i>
                <input type="email" id="email" name="email" placeholder="Your email" required
                    class="w-full border border-gray-200 rounded-lg py-3 pl-11 pr-3 text-sm outline-none focus:border-[#b18a48] transition">
            </div>
        </div>

        <!-- PHONE -->
        <div class="sm:col-span-2">
            <label for="phone" class="block text-xs font-semibold text-gray-600 mb-2">Phone Number *</label>
            <div class="relative">
                <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48]"></i>
                <input type="tel" id="phone" name="phone" placeholder="+92 300 1234567" required
                    class="w-full border border-gray-200 rounded-lg py-3 pl-11 pr-3 text-sm outline-none focus:border-[#b18a48] transition">
            </div>
        </div>

        <!-- DEPARTURE CITY -->
        <div class="sm:col-span-2">
            <label for="departure_city" class="block text-xs font-semibold text-gray-600 mb-2">Departure City *</label>
            <div class="relative">
                <i
                    class="fa-solid fa-location-dot absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <select name="departure_city" id="departure_city" required
                    class="w-full appearance-none border border-gray-200 rounded-lg py-3 pl-11 pr-3 text-sm outline-none focus:border-[#b18a48] bg-white">
                    <option value="">Select City</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Multan">Multan</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <!-- TRAVEL DATE -->
        <div>
            <label for="travel_date" class="block text-xs font-semibold text-gray-600 mb-2">Travel Date *</label>
            <div class="relative">
                <i
                    class="fa-regular fa-calendar absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <input type="date" name="travel_date" id="travel_date" required
                    class="w-full min-w-0 border border-gray-200 rounded-lg py-3 pl-10 pr-2 text-xs outline-none focus:border-[#b18a48]">
            </div>
        </div>

        <!-- RETURN DATE -->
        <div>
            <label for="return_date" class="block text-xs font-semibold text-gray-600 mb-2">Return Date</label>
            <div class="relative">
                <i
                    class="fa-regular fa-calendar-check absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <input type="date" name="return_date" id="return_date"
                    class="w-full min-w-0 border border-gray-200 rounded-lg py-3 pl-10 pr-2 text-xs outline-none focus:border-[#b18a48]">
            </div>
        </div>

        <!-- ADULTS -->
        <div>
            <label for="adults" class="block text-xs font-semibold text-gray-600 mb-2">Adults *</label>
            <div class="relative">
                <i
                    class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <select name="adults" id="adults" required
                    class="w-full appearance-none border border-gray-200 rounded-lg py-3 pl-10 pr-2 text-xs outline-none focus:border-[#b18a48] bg-white">
                    <option value="1">1 Adult</option>
                    <option value="2" selected>2 Adults</option>
                    <option value="3">3 Adults</option>
                    <option value="4">4 Adults</option>
                    <option value="5">5 Adults</option>
                    <option value="6">6 Adults</option>
                    <option value="7">7 Adults</option>
                    <option value="8">8 Adults</option>
                </select>
            </div>
        </div>

        <!-- CHILDREN -->
        <div>
            <label for="children" class="block text-xs font-semibold text-gray-600 mb-2">Children</label>
            <div class="relative">
                <i
                    class="fa-solid fa-child absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <select name="children" id="children"
                    class="w-full appearance-none border border-gray-200 rounded-lg py-3 pl-10 pr-2 text-xs outline-none focus:border-[#b18a48] bg-white">
                    <option value="0">0</option>
                    <option value="1">1 Child</option>
                    <option value="2">2 Children</option>
                    <option value="3">3 Children</option>
                    <option value="4">4 Children</option>
                </select>
            </div>
        </div>

        <!-- ROOM PREFERENCE -->
        <div class="sm:col-span-2">
            <label for="room_preference" class="block text-xs font-semibold text-gray-600 mb-2">Room Preference
                *</label>
            <div class="relative">
                <i
                    class="fa-solid fa-bed absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <select name="room_preference" id="room_preference" required
                    class="w-full appearance-none border border-gray-200 rounded-lg py-3 pl-11 pr-3 text-sm outline-none focus:border-[#b18a48] bg-white">
                    <option value="">Select Room</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Triple">Triple</option>
                    <option value="Quad">Quad</option>
                    <option value="Family">Family Room</option>
                </select>
            </div>
        </div>

        <!-- BUDGET -->
        <div class="sm:col-span-2">
            <label for="budget" class="block text-xs font-semibold text-gray-600 mb-2">Budget Per Person</label>
            <div class="relative">
                <i
                    class="fa-solid fa-wallet absolute left-4 top-1/2 -translate-y-1/2 text-[#b18a48] pointer-events-none"></i>
                <select name="budget" id="budget"
                    class="w-full appearance-none border border-gray-200 rounded-lg py-3 pl-11 pr-3 text-sm outline-none focus:border-[#b18a48] bg-white">
                    <option value="">Select Budget</option>
                    <option value="Below 200000">Below PKR 200,000</option>
                    <option value="200000-300000">PKR 200,000 - 300,000</option>
                    <option value="300000-400000">PKR 300,000 - 400,000</option>
                    <option value="400000-500000">PKR 400,000 - 500,000</option>
                    <option value="Above 500000">Above PKR 500,000</option>
                    <option value="Flexible">Flexible</option>
                </select>
            </div>
        </div>

        <!-- MESSAGE -->
        <div class="sm:col-span-2">
            <label for="message" class="block text-xs font-semibold text-gray-600 mb-2">Additional
                Requirements</label>
            <textarea name="message" id="message" rows="3" maxlength="1500" placeholder="Write your requirements..."
                class="w-full border border-gray-200 rounded-lg p-3 text-sm outline-none focus:border-[#b18a48] resize-y"></textarea>
        </div>

    </div>

    <!-- SUBMIT -->
    <button type="submit"
        class="w-full mt-6 bg-[#b18a48] hover:bg-[#967139] text-white font-semibold text-sm rounded-lg py-4 px-5 flex items-center justify-center gap-3 transition">
        Send Booking Enquiry
        <i class="fa-solid fa-arrow-right"></i>
    </button>

    <p class="flex items-center justify-center gap-2 text-xs text-gray-400 mt-5">
        <i class="fa-solid fa-lock text-[#b18a48]"></i>
        Your information is safe with us.
    </p>

</form>
