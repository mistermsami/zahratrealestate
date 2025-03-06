<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;
use App\Models\ListingDetail;

class PropertyController extends Controller
{
    public function propertyDetail($local,$slug)
    {
        // dd(session()->get('locale'));
        $listdetail = Slug::with('listing', 'listing.city', 'listing.area', 'listing.propertyType', 'listing.propertyFeatures', 'listing.propertyDetails', 'listing.agent', 'listing.images')->where('slug', $slug)->first();
        // dd($slug);
        $listing = $listdetail->listing;
        return view('propertyDetail', compact('listdetail', 'listing'));
    }

    public function propertylistings(){
        // $listings = ListingDetail::with(['agent', 'city', 'area', 'propertyType', 'propertyFeatures', 'propertyDetails', 'slug', 'images'])->get();

        return view('propertylistings');
    }
}
