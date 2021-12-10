<?php

namespace App\Http\Controllers;

use App\Models\Pricelist;
use App\Models\ResearchType;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $research_type = new ResearchType();
        $research_types = $research_type->all();
        $pricelist = new Pricelist();
        $pricelist = $pricelist->all();
        return view('pages.services', [
            'research_types' => $research_types,
            'pricelist' => $pricelist
        ]);
    }
}
