<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;


Route::get('/', function () {
    return view('main');
});

//////////   PER 5 JUZ ////////////

Route::get('/acak/juz/1-5', function () {
    return view('acakj1j5');
});
Route::get('/acak/juz/6-10', function () {
    return view('acakj6j10');
});
Route::get('/acak/juz/11-15', function () {
    return view('acakj11j15');
});
Route::get('/acak/juz/16-20', function () {
    return view('acakj16j20');
});
Route::get('/acak/juz/21-25', function () {
    return view('acakj21j25');
});
Route::get('/acak/juz/26-30', function () {
    return view('acakj26j30');
});

//////////   PER 1 JUZ ////////////

Route::get('/acak/juz/10', function () {
    return view('acakj10');
});
Route::get('/acak/juz/9', function () {
    return view('acakj9');
});
Route::get('/acak/juz/8', function () {
    return view('acakj8');
});
Route::get('/acak/juz/7', function () {
    return view('acakj7');
});
Route::get('/acak/juz/6', function () {
    return view('acakj6');
});



