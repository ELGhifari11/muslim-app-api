<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerTimeController;
use App\Http\Controllers\QuranController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// > https://muslimapp.elghifari.site/api/prayer-times/jakarta/2024-05-27
Route::get('prayer-times/{location}/{date}', [PrayerTimeController::class, 'index']);

// > https://muslimapp.elghifari.site/api/quran/surat/25
Route::get('/quran-surat/{number}', [QuranController::class, 'getSuratByNumber']);

// > https://muslimapp.elghifari.site/api/quran-surat/semua
Route::get('/quran-surat/semua', [QuranController::class, 'getAllSurat']);

// > https://muslimapp.elghifari.site/api/quran-ayat/1
Route::get('/quran-ayat/{index}', [QuranController::class, 'getAyatByIndex']);
