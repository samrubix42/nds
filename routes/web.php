<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/home-2', 'pages::home2')->name('home2');
Route::livewire('/services', 'pages::services')->name('services');
