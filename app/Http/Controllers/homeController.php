<?php

namespace App\Http\Controllers;
use App\Services\TranslationService;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(TranslationService $translator)
    {

        return view('index');
    }
    public function langtestt(TranslationService $translator)
{
    $text = "Hello, how are you?";
    return $translator->translate($text, 'ar'); // Arabic Translation
}
}
