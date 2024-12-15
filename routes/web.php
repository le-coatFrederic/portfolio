<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CV\CompetenceController;
use App\Http\Controllers\CV\EvenementController;
use App\Http\Controllers\HomeController;
use App\Models\CV\TypeEvenement;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::prefix('/skill')->name('skill.')->controller(CompetenceController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{skill}', 'show')->name('show');
    Route::get('/{skill}/edit', 'edit')->name('edit');
    Route::post('/{skill}/edit', 'update');
    Route::get('/{skill}/delete', 'delete')->name('delete');
});

Route::prefix('/event')->name('event.')->controller(EvenementController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{event}', 'show')->name('show');
    Route::get('/{event}/edit', 'edit')->name('edit');
    Route::post('/{event}/edit', 'update');
    Route::get('/{event}/delete', 'delete')->name('delete');
});

Route::prefix('/type_event')->name('type_event.')->controller(TypeEvenement::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('auth')->name('auth.')->controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin');
});