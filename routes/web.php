<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/listing-style', function () {
    return view('listing-style');
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
Route::get('/agentDetail', function () {
    return view('agentDetail');
});
Route::get('/agent', function () {
    return view('agent');
});
Route::get('/add-property', function () {
    return view('add-property');
});
Route::get('/about-us', function () {
    return view('about-us');
});
