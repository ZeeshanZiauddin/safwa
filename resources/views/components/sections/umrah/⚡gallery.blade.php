<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

  <section class="bg-white border border-[#eae6dc] rounded-2xl p-6 md:p-8 shadow-sm">

                    <div class="flex items-center gap-4 mb-7">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-[#f7f1e6] text-[#ae8745] flex items-center justify-center text-lg">
                            <i class="fa-solid fa-images"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-semibold tracking-[2px] text-[#b18a48]">EXPLORE THE HOLY CITIES</span>
                            <h2 class="text-2xl font-semibold text-[#303b32]">Umrah Gallery</h2>
                        </div>
                    </div>

                    <div class="relative overflow-hidden rounded-xl">

                        <img
                            id="mainPackageImage"
                            src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=1400&q=90"
                            alt="Holy Kaaba Makkah"
                            class="w-full h-[260px] sm:h-[350px] md:h-[420px] object-cover">

                        <span class="absolute bottom-5 left-5 bg-black/50 text-white px-4 py-2 rounded-full text-xs tracking-wider">
                            <i class="fa-solid fa-camera mr-2"></i>
                            UMRAH GALLERY
                        </span>

                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4">

                        <button type="button" class="gallery-thumb border-2 border-[#b18a48] rounded-lg overflow-hidden"
                            data-image="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=1400&q=90">
                            <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=400&q=80"
                                alt="Kaaba" class="w-full h-20 sm:h-24 object-cover">
                        </button>

                        <button type="button" class="gallery-thumb border-2 border-transparent rounded-lg overflow-hidden"
                            data-image="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=1400&q=90">
                            <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=400&q=80"
                                alt="Makkah" class="w-full h-20 sm:h-24 object-cover">
                        </button>

                        <button type="button" class="gallery-thumb border-2 border-transparent rounded-lg overflow-hidden"
                            data-image="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=1400&q=90">
                            <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=400&q=80"
                                alt="Madinah" class="w-full h-20 sm:h-24 object-cover">
                        </button>

                        <button type="button" class="gallery-thumb border-2 border-transparent rounded-lg overflow-hidden"
                            data-image="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1400&q=90">
                            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=400&q=80"
                                alt="Hotel" class="w-full h-20 sm:h-24 object-cover">
                        </button>

                    </div>
                </section>