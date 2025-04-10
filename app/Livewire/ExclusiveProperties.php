<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ListingDetail;
use App\Models\City;
use App\Models\PropertyType;

class ExclusiveProperties extends Component
{
    use WithPagination;

    public $listing_for, $planSelected, $SizefromSelected, $selectedPropertyType, $selectedCity, $bedsSelected, $minpriceSelected, $maxpriceSelected;
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
        $this->planSelected = null;

        $this->resetPage(); // Reset pagination as well
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
                $q->whereRaw('CAST(size AS SIGNED) > ?', [$this->SizefromSelected]);
            });
        }
        if ($this->planSelected && $this->planSelected != 'All') {
            $query->whereHas('propertyDetails', function ($q) {
                $q->where('plan', [$this->planSelected]);
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
                $q->whereRaw('CAST(rooms AS SIGNED) >= ?', $this->bedsSelected);
            });
        }
        if ($this->minpriceSelected) {
            $query->whereRaw('CAST(price AS SIGNED) >= ?', $this->minpriceSelected);
        }
        if ($this->maxpriceSelected) {
            $query->whereRaw('CAST(price AS SIGNED) <= ?', $this->maxpriceSelected);
        }

        // Use pagination
        $listings = $query->where('featuerd', 'featured')->paginate(12);

        return view('livewire.exclusive-properties', compact('listings'));
    }
}
