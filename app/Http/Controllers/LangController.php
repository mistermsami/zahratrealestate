<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function switchLang($locale)
    {
        if(session()->has('locale')) {
                    $oldlocale = session()->get('locale');
                    session()->flush();
                }
        $availableLocales = ['en', 'ar'];
        if (in_array($locale, $availableLocales)) {
            session()->put('locale', $locale);
            $currentLocale = session()->get('locale');
        }
        // $previousUrl = url()->previous();
        // // Redirect to homepage with the locale prefix.
        // $newUrl = preg_replace("#/$currentLocale(/|$)#", "/$oldlocale$1", $previousUrl, 1);

        // return redirect()->to($newUrl);
        return redirect('/' . $locale);
        // return redirect()->back();
        // return redirect()->to(str_replace(url('/'), url('/' . $locale), url()->previous()));

    }

    // public function switchLang($locale)
    // {
    //     $availableLocales = ['en', 'ar'];
    //     if(session()->has('locale')) {
    //         $oldlocale = session()->get('locale');
    //         session()->flush();
    //     }
    //     if (in_array($locale, $availableLocales)) {
    //         session()->put('locale', $locale);
    //         $currentLocale = session()->get('locale');
    //     }

    //     $previousUrl = url()->previous();
    //     $currentLocale = app()->getLocale(); // Get the current locale from the route

    //     // Replace only the first occurrence of '/en' or '/ar' in the URL with the new locale
    //     $newUrl = preg_replace("#/$oldlocale(/|$)#", "/$currentLocale$1", $previousUrl, 1);

    //     return redirect()->to($newUrl);
    // }

    // public function switchLang($locale)
    // {
    //     $availableLocales = ['en', 'ar'];

    //     // Check if the selected locale is valid
    //     if (in_array($locale, $availableLocales)) {
    //         $oldLocale = session()->get('locale', 'en'); // Default to 'en' if no locale exists
    //         session()->put('locale', $locale);
    //     } else {
    //         return redirect()->back(); // Prevent switching to an invalid locale
    //     }

    //     $previousUrl = url()->previous();

    //     // Replace the old locale with the new one in the URL
    //     $newUrl = preg_replace("#/$oldLocale(/|$)#", "/$locale$1", $previousUrl, 1);

    //     return redirect()->to($newUrl);
    // }
}
