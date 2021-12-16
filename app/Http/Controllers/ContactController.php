<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

    public function send_application(Request $request)
    {
        // dd($request->all());

        Application::create($request->only([
            'user_name',
            'email',
            'phone_number',
            'title',
            'message',
            'research_type_id'
        ]));

        return redirect()->route('contact');
    }
}
