<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\SeoPage;

class SeoMiddleware
{
    public function handle($request, Closure $next)
    {
        $slug = trim($request->path(), '/');
        if ($slug == '') $slug = 'home';

        $seo = SeoPage::where('slug', $slug)->first();

        if ($seo) {
            view()->share([
                // Basic
                'seoTitle' => $seo->title,
                'seoDescription' => $seo->meta_description,
                'seoKeywords' => $seo->meta_keywords,

                // Open Graph
                'seoOgTitle' => $seo->og_title ?: $seo->title,
                'seoOgDescription' => $seo->og_description ?: $seo->meta_description,
                'seoOgType' => $seo->og_type ?? 'website',
                'seoOgUrl' => $seo->og_url ?: url()->current(),
                'seoOgImage' => $seo->og_image ? asset('storage/' . $seo->og_image) : asset('default-og.png'),

                // Twitter
                'seoTwitterCard' => $seo->twitter_card ?? 'summary',
                'seoTwitterTitle' => $seo->twitter_title ?: $seo->title,
                'seoTwitterDescription' => $seo->twitter_description ?: $seo->meta_description,
                'seoTwitterImage' => $seo->twitter_image ? asset('storage/' . $seo->twitter_image) : asset('default-twitter.png'),
            ]);
        }

        return $next($request);
    }
}
