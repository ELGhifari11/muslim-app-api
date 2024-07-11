<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerTimeController;
use App\Http\Controllers\QuranController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// > https://elghifari.site/api/prayer-times/jakarta/2024-05-27
Route::get('prayertimes/{location}/{date}', [PrayerTimeController::class, 'index']);

// > https://elghifari.site/api/quran/surat/25
Route::get('/quransurat/{number}', [QuranController::class, 'getSuratByNumber']);

// > https://elghifari.site/api/quransurat/semua
Route::get('/quransurat/semua', [QuranController::class, 'getAllSurat']);

// > https://elghifari.site/api/quranayat/1
Route::get('/quranayat/{index}', [QuranController::class, 'getAyatByIndex']);

// > https://elghifari.site/api/quran/25/1
Route::get('/quran/{surat}/{ayat}', [QuranController::class, 'getAyatBySuratAndAyat']);

// > https://elghifari.site/api/quran/25/1-3
Route::get('/quran/{surat}/{ayat}-{panjang}', [QuranController::class, 'getAyatRange']);

// > https://elghifari.site/api/quran/page/1
Route::get('/quran/page/{page}', [QuranController::class, 'getAyatByPage']);

// > https://elghifari.site/api/quran/juz/1
Route::get('/quran/juz/{juz}', [QuranController::class, 'getAyatByJuz']);

// > https://elghifari.site/api/quran/juz/semua
Route::get('/quranjuz/semua', [QuranController::class, 'getAllJuz']);


////////////////////////////////////////////////////   ACAK PER JUZ


Route::get('/quran/ayat/acak/juz{nomerJuz}', [QuranController::class, 'getRandomJuz']);


////////////////////////////////////  ACAK JUZ UNIVERSAL   ACAK RENTANG JUZ


Route::get('/quran/ayat/acak/juz/{StartNoJuz}-{EndNoJuz}',[QuranController::class, 'getAcakJuzRange']);


/////////////////////////////////////////////////////////////////////////////

// > https://elghifari.site/api/quran/kisah/1
Route::get('/qurankisah/{tema}', [QuranController::class, 'getAyatByTema']);

// > https://elghifari.site/api/quran-semua-kisah
Route::get('qurankisahsemua', [QuranController::class, 'getAllTema']);







