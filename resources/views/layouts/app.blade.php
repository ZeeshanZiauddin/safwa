<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Title --}}
    <title>{{ $title ?? config('app.name') }}</title>

    {{-- Basic SEO --}}
    <meta name="description" content="{{ $description ?? 'Explore the best travel deals, flights, holiday packages and exclusive travel offers with ' . config('app.name') . '.' }}">

    <meta name="keywords" content="{{ $keywords ?? 'cheap flights, flight deals, holiday packages, travel agency, worldwide flights, travel deals' }}">

    <meta name="author" content="{{ config('app.name') }}">

    <meta name="robots" content="{{ $noindex ?? false ? 'noindex, nofollow' : 'index, follow' }}">

    <meta name="googlebot" content="{{ $noindex ?? false ? 'noindex, nofollow' : 'index, follow' }}">

    <meta name="theme-color" content="#ffffff">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">

    {{-- Open Graph / Facebook / WhatsApp --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? config('app.name') }}">
    <meta property="og:description" content="{{ $description ?? 'Explore flights, holiday packages and exclusive travel deals with ' . config('app.name') . '.' }}">
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">

    {{-- Twitter / X Cards --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? config('app.name') }}">
    <meta name="twitter:description" content="{{ $description ?? 'Explore flights, holiday packages and exclusive travel deals.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}">

    {{-- Additional SEO --}}
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    @persist('header')
    <livewire:inc.header />
    @endpersist


    <div class="topbar-spacer"></div>
    <livewire:inc.navbar />

    {{ $slot }}


    @persist('footer')
    <livewire:inc.footer />
    @endpersist

    @livewireScripts
</body>

</html>