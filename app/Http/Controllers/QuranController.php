<?php

namespace App\Http\Controllers;
use App\Services\QuranService;


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
            return response()->json(['error' => 'Surat not found'], 111);
        }

        return response()->json($surat);
    }
}
