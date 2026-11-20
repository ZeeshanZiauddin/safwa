<?php

use Illuminate\Support\Facades\Route;

// MIAN PAGES
Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/about-us', 'pages::about')->name('about');
Route::livewire('/contact-us', 'pages::contact')->name('contact');

// POLICIES ROUTES
Route::livewire('/policies', 'pages::policies.index')->name('policies.list');
Route::livewire('/policies/terms-and-condition', 'pages::policies.show')->name('policies.show');


// UMRAH ROUTES
Route::livewire('/umrah/packages', 'pages::umrah.index')->name('umrah.list');
Route::livewire('/umrah/terms-and-condition', 'pages::umrah.show')->name('umrah.show');
