<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, "welcome"] )->name("welcome");
Route::get('/activity', [ActivityController::class, "elenco"] )->name("activity.elenco");
Route::get('/activity/add', [ActivityController::class, "nuovo"] )->name("activity.nuovo");
Route::get('/activity/{id}', [PagesController::class, "singola"] )->name("singola");
Route::get('/activity/{id}/edit', [ActivityController::class, "modifica"] )->name("activity.modifica");
Route::get('/activity/{id}/delite', [ActivityController::class, "ellimina"] )->name("activity.ellimina");