<?php

namespace App\Http\Controllers\Filament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier as FacadesPurifier;
use Purifier;

class PostPreviewController extends Controller
{
    public function preview(Request $request)
    {
        $request->validate([
            'content' => ['nullable', 'string'],
        ]);

        $content = $request->input('content', '');

        // SANITIZE content sebelum rendering di iframe (penting)
        // Jika belum memasang HTML sanitizer, output akan tetap di-escape pada blade.
        // Disarankan menginstall package HTMLPurifier / voku/html-sanitizer lalu pakai di sini.
        // Untuk demo: kita bungkus di layout minimal
        $clean = FacadesPurifier::clean($content);
        $html = View::make('filament.posts._preview_frame', [
            'content' => $clean,
        ])->render();

        return response()->json(['html' => $html]);
    }
}
