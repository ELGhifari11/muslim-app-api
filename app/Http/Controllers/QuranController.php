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

    public function getSuratByNumber($number)
    {
        $surat = $this->quranService->getSuratByNumber($number);

        if (!$surat) {
            return response()->json(['error' => 'Surat not found'], 404);
        }

        return response()->json($surat);
    }

    public function getAllSurat()
    {
        $surat = $this->quranService->getAllSurat();

        if (!$surat) {
            return response()->json(['error' => 'No surat found'], 404);
        }

        return response()->json($surat);
    }

    public function getAyatByIndex($index)
    {
        $ayat = $this->quranService->getAyatByIndex($index);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }

    public function getAyatBySuratAndAyat($surat, $ayat)
    {
        $ayat = $this->quranService->getAyatBySuratAndAyat($surat, $ayat);

        if (!$ayat) {
            return response()->json(['error' => 'Ayat not found'], 404);
        }

        return response()->json($ayat);
    }

    public function getAyatRange($surat, $ayat, $panjang)
    {
        $ayatRange = $this->quranService->getAyatRange($surat, $ayat, $panjang);

        if (!$ayatRange) {
            return response()->json(['error' => 'Ayat range not found'], 404);
        }

        return response()->json($ayatRange);
    }

    public function getAyatByPage($page)
    {
        $ayatPage = $this->quranService->getAyatByPage($page);

        if (!$ayatPage) {
            return response()->json(['error' => 'Ayat not found for the given page'], 404);
        }

        return response()->json($ayatPage);
    }

    public function getAyatByJuz($juz)
    {
        $ayatJuz = $this->quranService->getAyatByJuz($juz);
        if (!$ayatJuz) {
            return response()->json(['error' => 'Ayat not found for the given juz'], 404);
        }
        return response()->json($ayatJuz);
    }

    public function getAllJuz()
    {
        $juz = $this->quranService->getAllJuz();
        if (!$juz) {
            return response()->json(['error' => 'No juz found'], 404);
        }
        return response()->json($juz);
    }
}
