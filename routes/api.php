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

// > https://muslimapp.elghifari.site/api/quran/25/1
Route::get('/quran/{surat}/{ayat}', [QuranController::class, 'getAyatBySuratAndAyat']);

// > https://muslimapp.elghifari.site/api/quran/25/1-3
Route::get('/quran/{surat}/{ayat}-{panjang}', [QuranController::class, 'getAyatRange']);

// > https://muslimapp.elghifari.site/api/quran/page/1
Route::get('/quran/page/{page}', [QuranController::class, 'getAyatByPage']);

// > https://muslimapp.elghifari.site/api/quran/juz/1
Route::get('/quran/juz/{juz}', [QuranController::class, 'getAyatByJuz']);





