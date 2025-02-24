<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;

class PropertyController extends Controller
{
    public function propertyDetail($slug)
    {
        $listdetail = Slug::with(
            'listing',
        'listing.city',
        'listing.area',
        'listing.propertyType',
        'listing.propertyFeatures',
        'listing.propertyDetails',
        'listing.agent',
        'listing.images')
        ->where('slug',$slug)->first();

        $listing = $listdetail->listing;
        return view('propertyDetail', compact('listdetail', 'listing'));
        }
}
