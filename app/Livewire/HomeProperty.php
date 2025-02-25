<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ListingDetail;

class HomeProperty extends Component
{
    public function render()
    {
        $listings = ListingDetail::with(['agent', 'city', 'area', 'propertyType', 'propertyFeatures', 'propertyDetails', 'slug', 'images'])->get();

        return view('livewire.home-property', compact('listings'));
    }
}
