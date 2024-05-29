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
}
