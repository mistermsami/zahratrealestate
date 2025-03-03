<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ListingDetail;
use App\Services\TranslationService;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;

class HomeProperty extends Component
{
    protected $translator;

    public function mount(TranslationService $translator)
    {
        $this->translator = $translator;
    }

    public function render()
    {
        $listings = ListingDetail::with(['agent', 'city', 'area', 'propertyType', 'propertyFeatures', 'propertyDetails', 'slug', 'images'])->get();
        $text = "Hello, how are you?";
    $translatedText = (new GoogleTranslate('ar'))->translate($text); // Direct translation

    dd($translatedText); // Check output

        return view('livewire.home-property', compact('listings', 'translatedText'));
    }
}
