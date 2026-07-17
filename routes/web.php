<?php
use App\Livewire\Contribute;
use App\Livewire\CreateEvent;
use App\Livewire\ShowEvent;
use App\Livewire\MyEvents;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    // Event Routes
Route::get('/events/create', CreateEvent::class)
    ->middleware(['auth'])
    ->name('events.create');

Route::get('/events/{event:slug}', ShowEvent::class)
    ->name('events.show');

Route::get('/events/{event:slug}/contribute', Contribute::class)
    ->middleware(['auth'])
    ->name('events.contribute');

require __DIR__.'/auth.php';
