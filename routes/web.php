<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CV\CompetenceController;
use App\Http\Controllers\CV\EvenementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectManagement\ActionController;
use App\Http\Controllers\ProjectManagement\CategoryController;
use App\Http\Controllers\ProjectManagement\EtatController;
use App\Http\Controllers\ProjectManagement\IncidentController;
use App\Http\Controllers\ProjectManagement\ProjectController;
use App\Http\Controllers\ProjectManagement\SujetController;
use App\Http\Controllers\ProjectManagement\TaskController;
use App\Http\Controllers\ProjectManagement\TicketController;
use App\Models\CV\TypeEvenement;
use App\Models\ProjectManagement\Etat;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::prefix('/skill')->name('skill.')->controller(CompetenceController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{skill}', 'show')->name('show');
    Route::get('/{skill}/edit', 'edit')->name('edit');
    Route::post('/{skill}/edit', 'update');
    Route::get('/{skill}/delete', 'destroy')->name('delete');
});

Route::prefix('/event')->name('event.')->controller(EvenementController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{event}', 'show')->name('show');
    Route::get('/{event}/edit', 'edit')->name('edit');
    Route::post('/{event}/edit', 'update');
    Route::get('/{event}/delete', 'destroy')->name('delete');
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

Route::prefix('/actions')->name('actions.')->controller(ActionController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{action}', 'show')->name('show');
    Route::get('/{action}/edit', 'edit')->name('edit');
    Route::post('/{action}/edit', 'update');
    Route::get('/{action}/delete', 'destroy')->name('delete');
});

Route::prefix('/categories')->name('categories.')->controller(CategoryController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{category}', 'show')->name('show');
    Route::get('/{category}/edit', 'edit')->name('edit');
    Route::post('/{category}/edit', 'update');
    Route::get('/{category}/delete', 'destroy')->name('delete');
});

Route::prefix('/contacts')->name('contacts.')->controller(ActionController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{contact}', 'show')->name('show');
    Route::get('/{contact}/edit', 'edit')->name('edit');
    Route::post('/{contact}/edit', 'update');
    Route::get('/{contact}/delete', 'destroy')->name('delete');
});

Route::prefix('/etats')->name('etats.')->controller(EtatController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{etat}', 'show')->name('show');
    Route::get('/{etat}/edit', 'edit')->name('edit');
    Route::post('/{etat}/edit', 'update');
    Route::get('/{etat}/delete', 'destroy')->name('delete');
});

Route::prefix('/incidents')->name('incidents.')->controller(IncidentController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{incident}', 'show')->name('show');
    Route::get('/{incident}/edit', 'edit')->name('edit');
    Route::post('/{incident}/edit', 'update');
    Route::get('/{incident}/delete', 'destroy')->name('delete');
});

Route::prefix('/projects')->name('projects.')->controller(ProjectController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{project}', 'show')->name('show');
    Route::get('/{project}/edit', 'edit')->name('edit');
    Route::post('/{project}/edit', 'update');
    Route::get('/{project}/delete', 'destroy')->name('delete');
});

Route::prefix('/sujets')->name('sujets.')->controller(SujetController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{sujet}', 'show')->name('show');
    Route::get('/{sujet}/edit', 'edit')->name('edit');
    Route::post('/{sujet}/edit', 'update');
    Route::get('/{sujet}/delete', 'destroy')->name('delete');
});

Route::prefix('/tasks')->name('tasks.')->controller(TaskController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{task}', 'show')->name('show');
    Route::get('/{task}/edit', 'edit')->name('edit');
    Route::post('/{task}/edit', 'update');
    Route::get('/{task}/delete', 'destroy')->name('delete');
});

Route::prefix('/tickets')->name('tickets.')->controller(TicketController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');
    Route::get('/{ticket}', 'show')->name('show');
    Route::get('/{ticket}/edit', 'edit')->name('edit');
    Route::post('/{ticket}/edit', 'update');
    Route::get('/{ticket}/delete', 'destroy')->name('delete');
});

