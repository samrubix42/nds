<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/home-2', 'pages::home2')->name('home2');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/services/{slug}', 'pages::service')->name('service.detail');
Route::livewire('/clientele', 'pages::clientele')->name('clientele');
Route::livewire('/career', 'pages::career')->name('career');
Route::livewire('/gallery', 'pages::gallery')->name('gallery');
Route::livewire('/training', 'pages::training')->name('training');


