<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\homeController;

// Language switch route
// Route::get('lang/{locale}', [LangController::class, 'switchLang'])->name('lang.switch');
// ✅ Language switch route should be outside the group

// Route::get('/lang/{locale}', [LangController::class, 'switchLang'])->name('lang.switch');
// Route::get('/lang/{locale}', [LangController::class, 'switchLang'])->name('lang.switch');
// Route::get('/lang/{locale}', [LangController::class, 'switchLang'])->name('lang.switch');

Route::get('/lang/{locale}', [LangController::class, 'switchLang'])->name('lang.switch');

// ✅ Locale-based route group
Route::group(['prefix' => '{locale?}', 'where' => ['locale' => 'en|ar']], function () {

// Group routes with locale prefix, but make it optional
// Route::group(['prefix' => '{locale?}', 'where' => ['locale' => 'en|ar']], function () {

    Route::get('/', [homeController::class, 'index'])->name('/');
    Route::get('/ab', [homeController::class, 'langtestt'])->name('/ab');

    Route::get('/test', function () {
        return view('test');
    })->name('/test');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    // Agent Routes
    Route::get('/agent', [Agents::class, 'index'])->name('agent');
    Route::get('/agentDetail/{id}', [Agents::class, 'agentDetail'])->name('agentDetail');

    // Property Routes
    Route::get('/propertyDetail/{slug}', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');
    Route::get('/propertylistings', [PropertyController::class, 'propertylistings'])->name('propertylistings');
    Route::get('/buy/properties-for-sale', [PropertyController::class, 'buypropertylistings'])->name('buyproperty');
    Route::get('/rent/properties-for-rent', [PropertyController::class, 'rentpropertylistings'])->name('rentproperty');

    Route::get('/add-property', function () {
        return view('add-property');
    })->name('add-property');

    Route::get('/about-us', function () {
        return view('about-us');
    })->name('about-us');

    // Blog Routes
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blogDetail/{id}/blog', [BlogController::class, 'blogDetail'])->name('blogDetail');
});

if(session()->has('locale')) {
    $thislocale = session()->get('locale');
}
else {
    $thislocale = 'en';
}
// Route::get('/agentDetail/{id}', [Agents::class, 'agentDetail'])->name('agentDetail');
// Route::group(['prefix' => session()->get('locale') ? 'ar' : 'en', 'where' => ['locale' => 'en|ar']], function () {
// Route::get('/propertyDetail/{slug}', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');
// });



