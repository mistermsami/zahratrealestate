<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Check if the route parameter "locale" exists (e.g. domain.com/ar)
        $locale = $request->route('locale');
        $availableLocales = ['en', 'ar']; // Add more languages as needed

        if ($locale && in_array($locale, $availableLocales)) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        } elseif (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
        // If neither is set, Laravel will use the default in config/app.php

        return $next($request);
    }
}
