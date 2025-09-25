<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;

class LogUserActivity
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Simpan aktivitas kecuali untuk asset atau API
        if ($request->is('api/*') || $request->is('storage/*')) {
            return $response;
        }

        UserActivity::create([
            'author_id' => Auth::user()->author_id ?? null,
            'page'      => $request->path() ?: '/',   // <= WAJIB isi ini
            'action'    => 'visit',
            'ip'        => $request->ip(),
        ]);


        return $response;
    }
}
