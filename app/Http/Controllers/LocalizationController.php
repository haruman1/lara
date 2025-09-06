<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    /**
     * Mengganti locale aplikasi dan menyimpannya di session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeLocale(string $locale)
    {
        // Pastikan locale yang diminta valid
        if (! in_array($locale, ['en', 'id', 'ja'])) {
            return response()->json(['error' => 'Locale tidak valid'], 400);
        }

        // Ambil data dari file JSON
        $translations = json_decode(file_get_contents(resource_path("lang/{$locale}.json")), true);

        return response()->json($translations);
    }
}
