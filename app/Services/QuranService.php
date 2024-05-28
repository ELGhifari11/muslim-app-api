<?php

namespace App\Services;

use GuzzleHttp\Client;

class QuranService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getSuratByNumber($number)
    {
        $response = $this->client->get("https://api.myquran.com/v2/quran/surat/{$number}");
        return json_decode($response->getBody()->getContents(), true);
    }
}
