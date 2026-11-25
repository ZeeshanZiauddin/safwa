<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

  <article id="payment" class="scroll-mt-8 rounded-[18px] border border-[#e9e3d8] bg-white p-6 shadow-[0_10px_35px_rgba(0,0,0,0.04)] transition duration-300 hover:shadow-[0_15px_45px_rgba(0,0,0,0.08)] sm:p-8">

                        <div class="flex items-start gap-5">

                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#dda555]/15 text-lg text-[#111111]">
                                <i class="fa-regular fa-credit-card"></i>
                            </div>

                            <div class="min-w-0 flex-1">

                                <span class="text-[10px] font-semibold uppercase tracking-[2px] text-[#dda555]">
                                    Policy 02
                                </span>

                                <h3 class="mt-2 font-serif text-2xl font-semibold text-[#111111]">
                                    Payment Policy
                                </h3>

                                <p class="mt-4 text-sm leading-8 text-[#777777]">
                                    Payments must be completed according to the agreed
                                    booking schedule. The total amount, payment deadlines
                                    and available payment methods will be communicated
                                    during the booking process.
                                </p>

                                <ul class="mt-5 space-y-3">

                                    <li class="flex gap-3 text-sm leading-7 text-[#555555]">
                                        <i class="fa-solid fa-check mt-1 text-[#dda555]"></i>
                                        <span>Required deposits must be paid before the booking is finalized.</span>
                                    </li>

                                    <li class="flex gap-3 text-sm leading-7 text-[#555555]">
                                        <i class="fa-solid fa-check mt-1 text-[#dda555]"></i>
                                        <span>Outstanding balances must be cleared before the specified deadline.</span>
                                    </li>

                                    <li class="flex gap-3 text-sm leading-7 text-[#555555]">
                                        <i class="fa-solid fa-check mt-1 text-[#dda555]"></i>
                                        <span>Additional bank or transaction charges may apply where applicable.</span>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </article>