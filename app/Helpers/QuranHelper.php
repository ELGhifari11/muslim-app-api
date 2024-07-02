<?

// app/Helpers/QuranHelper.php

namespace App\Helpers;

class QuranHelper
{
    public static function getRandomAyatByJuzRange($startJuz, $endJuz)
    {
        $url = "https://muslimapp.elghifari.site/api/quran/ayat/acak/juz/{$startJuz}-{$endJuz}";
        $data = file_get_contents($url);
        return json_decode($data, true);
    }
}
