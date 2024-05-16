<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, "welcome"] )->name("welcome");
Route::get('/activity', [PagesController::class, "elenco"] )->name("elenco");
Route::get('/activity/add', [ActivityController::class, "nuovo"] )->name("nuovo");
Route::get('/activity/{id}', [PagesController::class, "singola"] )->name("singola");
Route::get('/activity/edit/{id}', [ActivityController::class, "modifica"] )->name("modifica");
Route::get('/activity/delite/{id}', [ActivityController::class, "ellimina"] )->name("ellimina");