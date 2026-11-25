<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<section id="travel-policies" class="bg-[#f8f5ef] py-16 sm:py-20 lg:py-24">
   <livewire:sections.policies.hero />
    <livewire:sections.policies.policy-section />
   

    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">


        <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">
            <aside class="lg:sticky lg:top-8 lg:col-span-4 xl:col-span-3">
                <livewire:sections.policies.policy-sidebar />
            </aside>
            <div class="space-y-6 lg:col-span-8 xl:col-span-9">
                <livewire:sections.policies.booking_policy />
                <livewire:sections.policies.payment_policy />

            </div>
        </div>

    </div>

</section>
