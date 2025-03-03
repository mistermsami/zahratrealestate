<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;

// Group routes with an optional locale prefix.
// The regex 'en|ar' ensures only these locales are accepted.
Route::group(['prefix' => '{locale?}', 'where' => ['locale' => 'en|ar']], function () {

Route::get('/', [homeController::class, 'index'])->name('/');
Route::get('/ab', [homeController::class, 'langtestt'])->name('/ab');
// Route::get('/', function () {
//     return view('index');
// })->name('/');
});
// Optional: A dedicated route to switch language manually.
Route::get('lang/{locale}', [LangController::class, 'switchLang'])->name('lang.switch');

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
