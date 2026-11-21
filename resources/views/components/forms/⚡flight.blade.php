<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
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
