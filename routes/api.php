<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerTimeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// > /api/prayer-times?location=namalokasi&date=2024-05-27
Route::get('/prayer-times', [PrayerTimeController::class, 'index']);

// > /api/prayer-times/jakarta/2024-05-27
Route::get('prayer-times/{location}/{date}', [PrayerTimeController::class, 'index']);


