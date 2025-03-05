<?php

namespace App\Http\Controllers;
use App\Services\TranslationService;
use Illuminate\Http\Request;
use App\Models\PropertyType;
use App\Models\City;

class homeController extends Controller
{
    public function index(TranslationService $translator)
    {
        $propertyTypes = PropertyType::all();
        $cities = City::all();

        return view('index', compact('propertyTypes', 'cities'));
    }
    public function langtestt(TranslationService $translator)
{
    $text = "Hello, how are you?";
    return $translator->translate($text, 'ar'); // Arabic Translation
}
}
