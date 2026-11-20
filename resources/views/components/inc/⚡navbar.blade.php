<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<header class="main-navbar " id="mainNavbar">
    <div class="max-w-7xl mx-auto px-5">
        <div class="navbar-inner">
            <!-- LOGO -->
            <a href="index.html" class="logo-wrapper">
                <img class="header-logo" src="{{asset('logo.png')}}" alt="Safwa Travel Logo">
            </a>
            <!-- NAVIGATION -->
            <nav class="nav-links" id="navLinks">

                <a wire:navigate.hover href="{{route('home') }}" class="active">Home</a>
                <a wire:navigate.hover href="{{route('about') }}">About</a>
                <a wire:navigate.hover href="{{route('umrah.show') }}">Umrah</a>
                <a wire:navigate.hover href="{{route('umrah.list') }}">Umrah List</a>
                <a wire:navigate.hover href="{{route('umrah.list') }}">Policies</a>
                <a wire:navigate.hover href="{{route('contact') }}">Contact</a>
            </nav>

            <!-- NAV ACTIONS -->
            <div class="nav-actions">

                <a href="contact.html" class="gold-btn nav-book-btn">
                    Book Your Journey
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <button type="button" class="menu-toggle" id="menuToggle" aria-label="Toggle navigation"
                    aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>

            </div>

        </div>

    </div>

</header>