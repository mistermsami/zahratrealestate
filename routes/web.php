<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;

// Route::get('/{locale}', function ($locale) {
//     session(['locale' => $locale]); // Store locale in session
//     return redirect()->back(); // Redirect back after switching
// })->where('locale', 'en|ar'); // Allow only 'en' or 'ar'

Route::get('/switch-language/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'ar'])) {
        abort(400); // Invalid language
    }

    // Store the selected language in session
    Session::put('locale', $lang);
    App::setLocale($lang);

    return redirect()->back(); // Redirect back to the previous page
})->name('switch.language');


Route::get('/', function () {
    return view('index');
})->name('/');
Route::get('/test', function () {
    return view('test');
})->name('/test');
Route::get('/register', function () {
    return view('register');
})->name('register');
// Route::get('/propertyDetail', function () {
//     return view('propertyDetail');
// });
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


//Agent
Route::get('/agent', [Agents::class, 'index'])->name('agent');
Route::get('/agentDetail/{id}', [Agents::class, 'agentDetail'])->name('agentDetail');

//Property
Route::get('/propertyDetail/{slug}', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');
Route::get('/propertylistings', [PropertyController::class, 'propertylistings'])->name('propertylistings');

Route::get('/add-property', function () {
    return view('add-property');
})->name('add-property');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
// Route::get('/add-property', function () {
//     return view('add-property');
// });
// Route::get('/propertyDetail', function () {
//     return view('propertyDetail');
// });
// Route::get('/propertylistings', function () {
//     return view('propertylistings');
// });
// Route::get('/login', function () {
//     return view('login');
// })->name('login');
// Route::get('/register', function () {
//     return view('register');
// });


//Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogDetail/{id}/blog', [BlogController::class, 'blogDetail'])->name('blogDetail');
// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');
// Route::get('/blog-single', function () {
//     return view('blog-single');
// })->name('blog-single');
