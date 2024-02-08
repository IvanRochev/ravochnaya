<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home_page');
Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events_page');
Route::get('/merchendises', [App\Http\Controllers\MerchendisesController::class, 'index'])->name('merchendises_page');
Route::get('/team', [App\Http\Controllers\ResidentsController::class, 'index'])->name('residents_page');
