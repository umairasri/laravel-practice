<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Handle contact form submission
        $name = $request->input('name', 'stranger'); // Default to 'stranger' if name is not provided(empty)

        return view('contact-thanks', ['name' => $name]);
    }
}
