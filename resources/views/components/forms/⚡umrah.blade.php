<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

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