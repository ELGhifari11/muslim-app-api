<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class QuranService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getSuratByNumber($number)
    {
        try {
            $response = $this->client->get("https://api.myquran.com/v2/quran/surat/{$number}");
            $data = json_decode($response->getBody()->getContents(), true);
            Log::info('API response:', $data);
            return $data;
        } catch (\Exception $e) {
            Log::error('Error fetching surat:', ['message' => $e->getMessage()]);
            return null;
        }
    }

    public function getAllSurat()
    {
        try {
            $response = $this->client->get("https://api.myquran.com/v2/quran/surat/semua");
            $data = json_decode($response->getBody()->getContents(), true);
            Log::info('API response:', $data);
            return $data;
        } catch (\Exception $e) {
            Log::error('Error fetching all surat:', ['message' => $e->getMessage()]);
            return null;
        }
    }

    public function getAyatByIndex($index)
    {
        try {
            $response = $this->client->get("https://api.myquran.com/v2/quran/ayat/{$index}");
            $data = json_decode($response->getBody()->getContents(), true);
            Log::info('API response:', $data);
            return $data;
        } catch (\Exception $e) {
            Log::error('Error fetching ayat:', ['message' => $e->getMessage()]);
            return null;
        }
    }

    public function getAyatBySuratAndAyat($surat, $ayat)
    {
        try {
            $response = $this->client->get("https://api.myquran.com/v2/quran/ayat/{$surat}/{$ayat}");
            $data = json_decode($response->getBody()->getContents(), true);
            Log::info('API response:', $data);
            return $data;
        } catch (\Exception $e) {
            Log::error('Error fetching ayat:', ['message' => $e->getMessage()]);
            return null;
        }
    }

    public function getAyatRange($surat, $ayat, $panjang)
    {
        try {
            $response = $this->client->get("https://api.myquran.com/v2/quran/ayat/{$surat}/{$ayat}/{$panjang}");
            $data = json_decode($response->getBody()->getContents(), true);
            Log::info('API response:', $data);
            return $data;
        } catch (\Exception $e) {
            Log::error('Error fetching ayat range:', ['message' => $e->getMessage()]);
            return null;
        }
    }
}
