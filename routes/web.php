<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/propertyDetail', function () {
    return view('propertyDetail');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/propertylistings', function () {
    return view('propertylistings');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/blog', function () {
    return view('blog');
});

//Agent
Route::get('/agent', [Agents::class, 'index'])->name('agent');
Route::get('/agentDetail/{id}', [Agents::class, 'agentDetail'])->name('agentDetail');
// Route::get('/agent', function () {
    //     return view('agent');
    // });
    // Route::get('/agentDetail', function () {
    //     return view('agentDetail');
    // });

//Property
Route::get('/propertyDetail/{slug}', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');

Route::get('/add-property', function () {
    return view('add-property');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/add-property', function () {
    return view('add-property');
});
// Route::get('/propertyDetail', function () {
//     return view('propertyDetail');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
