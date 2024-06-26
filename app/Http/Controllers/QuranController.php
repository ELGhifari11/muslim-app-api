<?php

namespace App\Http\Controllers;

use App\Services\QuranService;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    protected $quranService;

    public function __construct(QuranService $quranService)
    {
        $this->quranService = $quranService;
    }

    // GET SURAT BY NUMBER
    public function getSuratByNumber($number)
    {
        $surat = $this->quranService->getSuratByNumber($number);

        if (!$surat) {
            return response()->json(['error' => 'Surat not found'], 404);
        }

        return response()->json($surat);
    }

    // GET ALL SURAT
    public function getAllSurat()
    {
        $surat = $this->quranService->getAllSurat();

        if (!$surat) {
            return response()->json(['error' => 'No surat found'], 404);
        }

        return response()->json($surat);
    }

    // GET AYAT BY INDEX
    public function getAyatByIndex($index)
    {
        $ayat = $this->quranService->getAyatByIndex($index);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }

    ///////////////////////////////////////// DATA RANDOM PER JUZ

    private $juzRanges = [
        1 => [1, 148],
        2 => [149, 259],
        3 => [260, 384],
        4 => [385, 516],
        5 => [517, 640],
        6 => [641, 751],
        7 => [752, 899],
        8 => [900, 1041],
        9 => [1042, 1200],
        10 => [1201, 1328],
        11 => [1329, 1478],
        12 => [1479, 1648],
        13 => [1649, 1803],
        14 => [1804, 2029],
        15 => [2030, 2214],
        16 => [2215, 2483],
        17 => [2484, 2673],
        18 => [2674, 2875],
        19 => [2876, 3218],
        20 => [3219, 3384],
        21 => [3385, 3563],
        22 => [3564, 3726],
        23 => [3727, 4089],
        24 => [4090, 4264],
        25 => [4265, 4510],
        26 => [4511, 4705],
        27 => [4706, 5104],
        28 => [5105, 5241],
        29 => [5242, 5672],
        30 => [5673, 6236]
    ];

///////////////////////////////////////////  RANDOM PER JUZ


    public function getRandomJuz($nomerJuz)
    {
        if (!isset($this->juzRanges[$nomerJuz])) {
            return response()->json(['error' => 'Invalid Juz number'], 404);
        }

        $range = $this->juzRanges[$nomerJuz];
        $randomIndex = rand($range[0], $range[1]);
        $ayat = $this->quranService->getAyatByIndex($randomIndex);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }

////////////////////////////////////////////// RANDOM RENATNG JUZ UNIVERSAL


    public function getAcakJuzRange($StartNoJuz, $EndNoJuz)
    {
        if (!isset($this->juzRanges[$StartNoJuz]) || !isset($this->juzRanges[$EndNoJuz])) {
            return response()->json(['error' => 'Invalid Juz number'], 404);
        }

        $startRange = $this->juzRanges[$StartNoJuz][0];
        $endRange = $this->juzRanges[$EndNoJuz][1];
        $randomIndex = rand($startRange, $endRange);
        $ayat = $this->quranService->getAyatByIndex($randomIndex);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }


//////////////////////////////////////////////////////////////////////////////////////////////////




    // GET AYAT BY SURAT AND AYAT
    public function getAyatBySuratAndAyat($surat, $ayat)
    {
        $ayat = $this->quranService->getAyatBySuratAndAyat($surat, $ayat);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }

    // GET AYAT RANGE
    public function getAyatRange($surat, $ayat, $panjang)
    {
        $ayatRange = $this->quranService->getAyatRange($surat, $ayat, $panjang);

        if (!$ayatRange) {
            return response()->json(['error' => 'Ayat range not found'], 404);
        }

        return response()->json($ayatRange);
    }

    // GET AYAT BY PAGE
    public function getAyatByPage($page)
    {
        $ayatPage = $this->quranService->getAyatByPage($page);

        if (!$ayatPage) {
            return response()->json(['error' => 'Ayat not found for the given page'], 404);
        }

        return response()->json($ayatPage);
    }

    // GET AYAT BY JUZ
    public function getAyatByJuz($juz)
    {
        $ayatJuz = $this->quranService->getAyatByJuz($juz);
        if (!$ayatJuz) {
            return response()->json(['error' => 'Ayat not found for the given juz'], 404);
        }
        return response()->json($ayatJuz);
    }

    // GET ALL JUZ
    public function getAllJuz()
    {
        $juz = $this->quranService->getAllJuz();
        if (!$juz) {
            return response()->json(['error' => 'No juz found'], 404);
        }
        return response()->json($juz);
    }

    // GET AYAT BY TEMA
    public function getAyatByTema($tema)
    {
        $ayat = $this->quranService->getAyatByTema($tema);
        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found for the given tema'], 404);
        }
        return response()->json($ayat);
    }

    // GET ALL TEMA
    public function getAllTema()
    {
        $tema = $this->quranService->getAllTema();
        if (!$tema) {
            return response()->json(['error' => 'No tema found'], 404);
        }
        return response()->json($tema);
    }
}
