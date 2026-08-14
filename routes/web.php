<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return response()->json([
        'status' => 'success',
        'message' => 'All application caches (config, cache, route, view) cleared successfully!',
    ]);
})->name('clear-cache');

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/home-2', 'pages::home2')->name('home2');
Route::livewire('/home-3', 'pages::home3')->name('home3');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/services/{slug}', 'pages::service')->name('service.detail');
Route::livewire('/clientele', 'pages::clientele')->name('clientele');
Route::livewire('/career', 'pages::career')->name('career');
Route::livewire('/gallery', 'pages::gallery')->name('gallery');
Route::livewire('/training', 'pages::training')->name('training');
Route::livewire('/login', 'pages::auth.login')->name('login')->middleware('guest');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::livewire('/', 'admin::dashboard')->name('dashboard');
    Route::livewire('/homeslider', 'admin::homeslider')->name('homeslider');
    Route::livewire('/clientele', 'admin::clientele')->name('clientele');
    Route::livewire('/gallery-category', 'admin::gallery-category')->name('gallery-category');
    Route::livewire('/gallery', 'admin::gallery')->name('gallery');
    Route::livewire('/faq-list', 'admin::faq-list')->name('faq-list');
    Route::livewire('/testimonial-list', 'admin::testimonial-list')->name('testimonial-list');
    Route::livewire('/contact', 'admin::contact')->name('contact');
    Route::livewire('/job-posts', 'admin::job-posts')->name('job-posts');
    Route::livewire('/job-applications', 'admin::job-applications')->name('job-applications');
    Route::prefix('services')->name('services.')->group(function () {
        Route::livewire('/', 'admin::service.list')->name('index');
        Route::livewire('/add', 'admin::service.add')->name('add');
        Route::livewire('/edit/{id}', 'admin::service.update')->name('edit');
    });
    Route::livewire('/settings', 'admin::setting')->name('settings');
});
