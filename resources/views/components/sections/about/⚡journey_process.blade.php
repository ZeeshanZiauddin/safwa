<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="py-24 bg-[#F5EBD0]/40">
    <div class="container mx-auto px-5 lg:px-10">

        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <span class="section-label">YOUR JOURNEY WITH US</span>
            <h2 class="section-title mt-5">
                Simple Steps,
                <span class="gold-text">Meaningful Journeys.</span>
            </h2>
            <p class="text-gray-500 mt-5 leading-8">
                We aim to make the journey from your first enquiry
                to your travel day easy to understand.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-7">

            <div class="journey-step reveal">
                <span class="step-number">01</span>
                <div class="step-icon"><i class="fa-solid fa-message"></i></div>
                <h3>Share Your Plans</h3>
                <p>Tell us about your destination, travel dates and preferences.</p>
            </div>

            <div class="journey-step reveal">
                <span class="step-number">02</span>
                <div class="step-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                <h3>Explore Options</h3>
                <p>Review available travel packages and arrangements.</p>
            </div>

            <div class="journey-step reveal">
                <span class="step-number">03</span>
                <div class="step-icon"><i class="fa-solid fa-calendar-check"></i></div>
                <h3>Plan Your Journey</h3>
                <p>Discuss the details and prepare your travel arrangements.</p>
            </div>

            <div class="journey-step reveal">
                <span class="step-number">04</span>
                <div class="step-icon"><i class="fa-solid fa-plane-departure"></i></div>
                <h3>Begin Your Journey</h3>
                <p>Get ready to experience your next meaningful journey.</p>
            </div>

        </div>
    </div>
</section>
