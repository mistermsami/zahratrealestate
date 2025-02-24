<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class Agents extends Controller
{
    public function index()
    {
        $agents = Agent::with('listings')->get();
        return view('agent', compact('agents'));

    }

    public function agentDetail($id)
    {
        $agent = Agent::with('listings',
        'listings.city',
        'listings.area',
        'listings.propertyType',
        'listings.propertyFeatures',
        'listings.propertyDetails',
        'listings.slug',
        'listings.images')->find($id);
        return view('agentDetail', compact('agent'));
    }
}
