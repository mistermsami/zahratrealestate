<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ListingDetail;
use App\Models\City;
use App\Models\PropertyType;

class Test extends Component
{
    use WithPagination;

    public $listing_for, $SizefromSelected, $selectedPropertyType, $selectedCity, $bedsSelected, $minpriceSelected, $maxpriceSelected;
    public $propertyTypes, $cities;

    public function mount()
    {
        $this->propertyTypes = PropertyType::all();
        $this->cities = City::all();
    }

    public function updated($propertyName)
    {
        $this->resetPage(); // Reset pagination when any filter changes
    }

    public function render()
    {
        $query = ListingDetail::query();

        if ($this->listing_for) {
            // dd($this->listing_for);
            $listingfor = '';
            if ($this->listing_for == 'Buy') {
                $listingfor = 'for sale';
            }
            if ($this->listing_for == 'Rent') {
                $listingfor = 'for rent';
            }
            $query->where('listing_for', $listingfor);
        }
        if ($this->SizefromSelected) {
            $query->whereHas('propertyDetails', function ($q) {
                $q->where('size', '>=', $this->SizefromSelected);
            });
        }
        if ($this->selectedPropertyType) {
            $query->where('property_type_id', $this->selectedPropertyType);
        }
        if ($this->selectedCity) {
            $query->where('city_id', $this->selectedCity);
        }
        if ($this->bedsSelected) {
            $query->whereHas('propertyDetails', function ($q) {
                $q->where('rooms', '>=', $this->bedsSelected);
            });
        }
        if ($this->minpriceSelected) {
            $query->where('price', '>=', $this->minpriceSelected);
        }
        if ($this->maxpriceSelected) {
            $query->where('price', '<=', $this->maxpriceSelected);
        }

        // Use pagination
        $listings = $query->paginate(12);

        return view('livewire.test', compact('listings'));
    }
}
