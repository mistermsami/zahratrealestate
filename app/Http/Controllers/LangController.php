<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function switchLang($locale)
    {
        $availableLocales = ['en', 'ar'];
        if (in_array($locale, $availableLocales)) {
            session()->put('locale', $locale);
        }
        // Redirect to homepage with the locale prefix.
        return redirect('/' . $locale);
    }
}
