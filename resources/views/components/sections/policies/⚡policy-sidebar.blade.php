<?php

use Livewire\Component;

new class extends Component {
    //
};
?>


<div class="overflow-hidden rounded-[18px] border border-[#e9e3d8] bg-white shadow-[0_15px_45px_rgba(0,0,0,0.06)]">
    <div class="bg-[#111111] px-7 py-7">
        <span class="text-[11px] font-semibold uppercase tracking-[3px] text-[#dda555]">
            Quick Navigation
        </span>
        <h3 class="mt-3 font-serif text-2xl font-semibold text-white">
            Policy Guide
        </h3>
        <p class="mt-2 text-xs leading-6 text-white/60">
            Select a topic to read more about our policies.
        </p>

    </div>


    <nav class="p-4">

        <a href="#booking"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-regular fa-calendar-check w-5 text-[#dda555]"></i>
                Booking Policy
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#payment"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-regular fa-credit-card w-5 text-[#dda555]"></i>
                Payment Policy
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#cancellation"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-solid fa-ban w-5 text-[#dda555]"></i>
                Cancellation Policy
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#refund"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-solid fa-wallet w-5 text-[#dda555]"></i>
                Refund Policy
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#documents"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-regular fa-file-lines w-5 text-[#dda555]"></i>
                Travel Documents
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#visa"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-solid fa-passport w-5 text-[#dda555]"></i>
                Visa Policy
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#hotel"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-solid fa-hotel w-5 text-[#dda555]"></i>
                Hotel Policy
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#transport"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-solid fa-car w-5 text-[#dda555]"></i>
                Transportation
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#responsibility"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-solid fa-user-shield w-5 text-[#dda555]"></i>
                Customer Responsibility
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

        <a href="#contact-policy"
            class="group flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium text-[#292929] transition hover:bg-[#f8f5ef] hover:text-[#dda555]">
            <span class="flex items-center gap-3">
                <i class="fa-regular fa-circle-question w-5 text-[#dda555]"></i>
                General Information
            </span>
            <i class="fa-solid fa-chevron-right text-[10px] text-[#777777] transition group-hover:translate-x-1"></i>
        </a>

    </nav>


    <!-- SIDEBAR CONTACT BOX -->
    <div class="mx-4 mb-4 rounded-xl bg-[#f8f5ef] p-5">

        <div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#dda555]/20 text-[#111111]">
            <i class="fa-solid fa-headset"></i>
        </div>

        <h4 class="mt-4 font-serif text-xl font-semibold text-[#111111]">
            Need Assistance?
        </h4>

        <p class="mt-2 text-xs leading-6 text-[#777777]">
            Have questions about our travel policies?
            Our team is here to help.
        </p>

        <a href="#contact"
            class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-[#111111] transition hover:text-[#dda555]">
            Get In Touch
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</div>
