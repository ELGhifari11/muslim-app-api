<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerTimeController;
use App\Http\Controllers\QuranController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// > https://muslimapp.elghifari.site/api/prayer-times/jakarta/2024-05-27
Route::get('prayertimes/{location}/{date}', [PrayerTimeController::class, 'index']);

// > https://muslimapp.elghifari.site/api/quran/surat/25
Route::get('/quransurat/{number}', [QuranController::class, 'getSuratByNumber']);

// > https://muslimapp.elghifari.site/api/quran-surat/semua
Route::get('/quransurat/semua', [QuranController::class, 'getAllSurat']);

// > https://muslimapp.elghifari.site/api/quran-ayat/1
Route::get('/quranayat/{index}', [QuranController::class, 'getAyatByIndex']);

// > https://muslimapp.elghifari.site/api/quran/25/1
Route::get('/quran/{surat}/{ayat}', [QuranController::class, 'getAyatBySuratAndAyat']);

// > https://muslimapp.elghifari.site/api/quran/25/1-3
Route::get('/quran/{surat}/{ayat}-{panjang}', [QuranController::class, 'getAyatRange']);

// > https://muslimapp.elghifari.site/api/quran/page/1
Route::get('/quran/page/{page}', [QuranController::class, 'getAyatByPage']);

// > https://muslimapp.elghifari.site/api/quran/juz/1
Route::get('/quran/juz/{juz}', [QuranController::class, 'getAyatByJuz']);

// > https://muslimapp.elghifari.site/api/quran/juz/semua
Route::get('/quranjuz/semua', [QuranController::class, 'getAllJuz']);

////////////////////////////////////////////////////   ACAK PER JUZ

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz1
Route::get('/quran/ayat/acak/juz1', [QuranController::class, 'getAcakJuz1']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz2
Route::get('/quran/ayat/acak/juz2', [QuranController::class, 'getAcakJuz2']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz3
Route::get('/quran/ayat/acak/juz3', [QuranController::class, 'getAcakJuz3']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz4
Route::get('/quran/ayat/acak/juz4', [QuranController::class, 'getAcakJuz4']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz5
Route::get('/quran/ayat/acak/juz5', [QuranController::class, 'getAcakJuz5']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz6
Route::get('/quran/ayat/acak/juz6', [QuranController::class, 'getAcakJuz6']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz7
Route::get('/quran/ayat/acak/juz7', [QuranController::class, 'getAcakJuz7']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz8
Route::get('/quran/ayat/acak/juz8', [QuranController::class, 'getAcakJuz8']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz9
Route::get('/quran/ayat/acak/juz9', [QuranController::class, 'getAcakJuz9']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz10
Route::get('/quran/ayat/acak/juz10', [QuranController::class, 'getAcakJuz10']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz11
Route::get('/quran/ayat/acak/juz11', [QuranController::class, 'getAcakJuz11']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz12
Route::get('/quran/ayat/acak/juz12', [QuranController::class, 'getAcakJuz12']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz13
Route::get('/quran/ayat/acak/juz13', [QuranController::class, 'getAcakJuz13']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz14
Route::get('/quran/ayat/acak/juz14', [QuranController::class, 'getAcakJuz14']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz15
Route::get('/quran/ayat/acak/juz15', [QuranController::class, 'getAcakJuz15']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz16
Route::get('/quran/ayat/acak/juz16', [QuranController::class, 'getAcakJuz16']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz17
Route::get('/quran/ayat/acak/juz17', [QuranController::class, 'getAcakJuz17']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz18
Route::get('/quran/ayat/acak/juz18', [QuranController::class, 'getAcakJuz18']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz19
Route::get('/quran/ayat/acak/juz19', [QuranController::class, 'getAcakJuz19']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz20
Route::get('/quran/ayat/acak/juz20', [QuranController::class, 'getAcakJuz20']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz21
Route::get('/quran/ayat/acak/juz21', [QuranController::class, 'getAcakJuz21']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz22
Route::get('/quran/ayat/acak/juz22', [QuranController::class, 'getAcakJuz22']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz23
Route::get('/quran/ayat/acak/juz23', [QuranController::class, 'getAcakJuz23']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz24
Route::get('/quran/ayat/acak/juz24', [QuranController::class, 'getAcakJuz24']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz25
Route::get('/quran/ayat/acak/juz25', [QuranController::class, 'getAcakJuz25']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz26
Route::get('/quran/ayat/acak/juz26', [QuranController::class, 'getAcakJuz26']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz27
Route::get('/quran/ayat/acak/juz27', [QuranController::class, 'getAcakJuz27']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz28
Route::get('/quran/ayat/acak/juz28', [QuranController::class, 'getAcakJuz28']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz29
Route::get('/quran/ayat/acak/juz29', [QuranController::class, 'getAcakJuz29']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz30
Route::get('/quran/ayat/acak/juz30', [QuranController::class, 'getAcakJuz30']);

////////////////////////////////////////////////////   ACAK PER 5 JUZ

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz1-5
Route::get('/quran/ayat/acak/juz1-5', [QuranController::class, 'getAcakJuz1Juz5']);

// > https://muslimapp.elghifari.site/api//quran/ayat/acak/juz6-10
Route::get('/quran/ayat/acak/juz6-10', [QuranController::class, 'getAcakJuz6Juz10']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz11-15
Route::get('/quran/ayat/acak/juz11-15', [QuranController::class, 'getAcakJuz11Juz15']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz16-20
Route::get('/quran/ayat/acak/juz16-20', [QuranController::class, 'getAcakJuz16Juz20']);

// > https://muslimapp.elghifari.site/api//quran/ayat/acak/juz21-25
Route::get('/quran/ayat/acak/juz21-25', [QuranController::class, 'getAcakJuz21Juz25']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz26-30
Route::get('/quran/ayat/acak/juz26-30', [QuranController::class, 'getAcakJuz26Juz30']);

////////////////////////////////////////////////////   ACAK PER 10 JUZ

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz1-10
Route::get('/quran/ayat/acak/juz1-10', [QuranController::class, 'getAcakJuz1Juz10']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz11-20
Route::get('/quran/ayat/acak/juz11-20', [QuranController::class, 'getAcakJuz11Juz20']);

// > https://muslimapp.elghifari.site/api/quran/ayat/acak/juz21-30
Route::get('/quran/ayat/acak/juz21-30', [QuranController::class, 'getAcakJuz21Juz30']);

/////////////////////////////////////////////////////////////////////////////

// > https://muslimapp.elghifari.site/api/quran/kisah/1
Route::get('/qurankisah/{tema}', [QuranController::class, 'getAyatByTema']);

// > https://muslimapp.elghifari.site/api/quran-semua-kisah
Route::get('qurankisahsemua', [QuranController::class, 'getAllTema']);







