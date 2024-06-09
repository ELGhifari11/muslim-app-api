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

    ////////////////////////////////////////////////////////////////////

    // GET ACAK AYAT BY JUZ
    private function getAcakAyat($start, $end)
    {
        $acak = rand($start, $end);
        $ayat = $this->quranService->getAyatByIndex($acak);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }
    // GET ACAK JUZ 1
    public function getAcakJuz1()
    {
        return $this->getAcakAyat(1, 148);
    }

    // GET ACAK JUZ 2
    public function getAcakJuz2()
    {
        return $this->getAcakAyat(149, 259);
    }

    // GET ACAK JUZ 3
    public function getAcakJuz3()
    {
        return $this->getAcakAyat(260, 384);
    }

    // GET ACAK JUZ 4
    public function getAcakJuz4()
    {
        return $this->getAcakAyat(385, 516);
    }

    // GET ACAK JUZ 5
    public function getAcakJuz5()
    {
        return $this->getAcakAyat(517, 640);
    }

    // GET ACAK JUZ 6
    public function getAcakJuz6()
    {
        return $this->getAcakAyat(641, 751);
    }

    // GET ACAK JUZ 7
    public function getAcakJuz7()
    {
        return $this->getAcakAyat(752, 899);
    }

    // GET ACAK JUZ 8
    public function getAcakJuz8()
    {
        return $this->getAcakAyat(900, 1041);
    }

    // GET ACAK JUZ 9
    public function getAcakJuz9()
    {
        return $this->getAcakAyat(1042, 1200);
    }

    // GET ACAK JUZ 10
    public function getAcakJuz10()
    {
        return $this->getAcakAyat(1201, 1328);
    }

    // GET ACAK JUZ 11
    public function getAcakJuz11()
    {
        return $this->getAcakAyat(1329, 1478);
    }

    // GET ACAK JUZ 12
    public function getAcakJuz12()
    {
        return $this->getAcakAyat(1479, 1648);
    }

    // GET ACAK JUZ 13
    public function getAcakJuz13()
    {
        return $this->getAcakAyat(1649, 1803);
    }

    // GET ACAK JUZ 14
    public function getAcakJuz14()
    {
        return $this->getAcakAyat(1804, 2029);
    }

    // GET ACAK JUZ 15
    public function getAcakJuz15()
    {
        return $this->getAcakAyat(2030, 2214);
    }

    // GET ACAK JUZ 16
    public function getAcakJuz16()
    {
        return $this->getAcakAyat(2215, 2483);
    }

    // GET ACAK JUZ 17
    public function getAcakJuz17()
    {
        return $this->getAcakAyat(2484, 2673);
    }

    // GET ACAK JUZ 18
    public function getAcakJuz18()
    {
        return $this->getAcakAyat(2674, 2875);
    }

    // GET ACAK JUZ 19
    public function getAcakJuz19()
    {
        return $this->getAcakAyat(2876, 3218);
    }

    // GET ACAK JUZ 20
    public function getAcakJuz20()
    {
        return $this->getAcakAyat(3219, 3384);
    }

    // GET ACAK JUZ 21
    public function getAcakJuz21()
    {
        return $this->getAcakAyat(3385, 3563);
    }

    // GET ACAK JUZ 22
    public function getAcakJuz22()
    {
        return $this->getAcakAyat(3564, 3726);
    }

    // GET ACAK JUZ 23
    public function getAcakJuz23()
    {
        return $this->getAcakAyat(3727, 4089);
    }

    // GET ACAK JUZ 24
    public function getAcakJuz24()
    {
        return $this->getAcakAyat(4090, 4264);
    }

    // GET ACAK JUZ 25
    public function getAcakJuz25()
    {
        return $this->getAcakAyat(4265, 4510);
    }

    // GET ACAK JUZ 26
    public function getAcakJuz26()
    {
        return $this->getAcakAyat(4511, 4705);
    }

    // GET ACAK JUZ 27
    public function getAcakJuz27()
    {
        return $this->getAcakAyat(4706, 5104);
    }

    // GET ACAK JUZ 28
    public function getAcakJuz28()
    {
        return $this->getAcakAyat(5105, 5241);
    }

    // GET ACAK JUZ 29
    public function getAcakJuz29()
    {
        return $this->getAcakAyat(5242, 5672);
    }

    // GET ACAK JUZ 30
    public function getAcakJuz30()
    {
        return $this->getAcakAyat(5673, 6236);
    }

/////////////////////////////////   ACAK PER 5 JUZ

    // GET ACAK JUZ 1 - 5
    public function getAcakJuz1Juz5()
    {
        return $this->getAcakAyat(1, 640);
    }

    // GET ACAK JUZ 6 - 10
    public function getAcakJuz6Juz10()
    {
        return $this->getAcakAyat(641, 1328);
    }

    // GET ACAK JUZ 11 - 15
    public function getAcakJuz11Juz15()
    {
        return $this->getAcakAyat(1329, 2214);
    }

    // GET ACAK JUZ 16 - 20
    public function getAcakJuz16Juz20()
    {
        return $this->getAcakAyat(2215, 3384);
    }

    // GET ACAK JUZ 21 - 25
    public function getAcakJuz21Juz25()
    {
        return $this->getAcakAyat(3385, 4510);
    }

    // GET ACAK JUZ 26 - 30
    public function getAcakJuz26Juz30()
    {
        return $this->getAcakAyat(4511, 6236);
    }

    /////////////////////////////////   ACAK PER 10 JUZ

    // GET ACAK JUZ 1 - 10
    public function getAcakJuz1Juz10()
    {
        return $this->getAcakAyat(1, 1328);
    }

    // GET ACAK JUZ 11 - 20
    public function getAcakJuz11Juz20()
    {
        return $this->getAcakAyat(1329, 3384);
    }

    // GET ACAK JUZ 21 - 30
    public function getAcakJuz21Juz30()
    {
        return $this->getAcakAyat(3385, 6236);
    }


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
