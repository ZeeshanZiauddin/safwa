<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return $this->view()->title('Home');
    }
};
?>

<div>

    <livewire:sections.home.hero />
    <livewire:sections.home.features />
    <livewire:sections.home.about />
    <livewire:sections.home.umrah_packages />
    <livewire:sections.home.destination />
    <livewire:sections.home.why_us />
    <livewire:sections.home.reviews />
    <livewire:sections.home.cta />

</div>
