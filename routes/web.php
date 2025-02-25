<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('index');
})->name('/');
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
Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

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
