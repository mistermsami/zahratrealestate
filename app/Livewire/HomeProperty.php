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
        $listings = ListingDetail::with(['agent', 'city', 'area', 'propertyType', 'propertyFeatures', 'propertyDetails', 'slug', 'images'])
        ->where('featuerd', 'featuerd')
        ->limit(9)->get();
        if($listings->isEmpty()){
            $listings = ListingDetail::with(['agent', 'city', 'area', 'propertyType', 'propertyFeatures', 'propertyDetails', 'slug', 'images'])
            ->where('featuerd', 'featured')
            ->limit(9)->get();
        }
        // $translator = app(TranslationService::class); // Get the translation service instance
        // $text = "Hello, how are you?";
        // $translatedText = $translator->translate($text, 'ar'); // Arabic Translation
        // $translator = new \App\Services\TranslationService();
        // // $translatedText = $translator->translate('Hello', 'ar');


        // // dd($translatedText); // Debug: Check the output before returning the view
        // foreach ($listings as $listing) {
        //     $listing->title = $this->translator->translate($listing->title, 'ar');
        //     $listing->description = $this->translator->translate($listing->description, 'ar');
        // }


        // $text = "Hello, how are you?";
        // $translatedText = (new GoogleTranslate('ar'))->translate($text); // Direct translation

        // dd($translatedText); // Check output

        return view('livewire.home-property', compact('listings'));
    }
}
