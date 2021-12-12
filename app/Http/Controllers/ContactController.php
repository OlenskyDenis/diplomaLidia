<?php

namespace App\Http\Controllers;

use App\Models\ResearchType;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $research_type = new ResearchType();
        $research_types = $research_type->all();
        return view('pages.contact', [
            'research_types' => $research_types
        ]);
    }
}
