<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ListingDetail;
use App\Models\City;
use App\Models\PropertyType;

class BuyProperties extends Component
{
    use WithPagination;

    public $listing_for, $SizefromSelected, $selectedPropertyType, $selectedCity, $bedsSelected, $minpriceSelected, $maxpriceSelected;
    public $propertyTypes, $cities;

    public function mount()
    {
        $this->propertyTypes = PropertyType::all();
        $this->cities = City::all();
    }

    public function resetFilters()
    {
        $this->listing_for = null;
        $this->SizefromSelected = null;
        $this->selectedPropertyType = null;
        $this->selectedCity = null;
        $this->bedsSelected = null;
        $this->minpriceSelected = null;
        $this->maxpriceSelected = null;

        $this->resetPage(); // Reset pagination as well
    }
    public function updated($propertyName)
    {
        $this->resetPage(); // Reset pagination when any filter changes
    }

    public function render()
    {
        $query = ListingDetail::query();

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
        $listings = $query->where('listing_for', 'for sale')->paginate(12);

        return view('livewire.buy-properties', compact('listings'));
    }
}
