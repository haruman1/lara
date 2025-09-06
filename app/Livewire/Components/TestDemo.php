<?php

namespace App\Livewire\Components;

use Livewire\Component;

class TestDemo extends Component
{
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
    public function render()
    {
        return view('livewire.test-demo')->layout('layouts.test');
    }
}
