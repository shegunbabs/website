<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Volt::route('/', 'website.index')->name('website.index');
Volt::route('/work', 'website.work')->name('website.work');
Volt::route('/notes', 'website.blog-list')->name('website.blog-list');
Volt::route('/note/{slug}', 'website.blog-single')->name('website.blog-single');

#Route::view('/', 'samples.sample2');

Route::get('is-test', function (){
    dd(
        request()->host(),
        request()->httpHost(),
        request()->schemeAndHttpHost()
    );
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
