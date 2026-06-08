<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
   
  
   public function store(Request $request)
    { 
        // dd($request->all());
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        ContactUs::create($validated);

        return redirect(url()->previous() . '#contact')
    ->with('success', 'Your message has been sent successfully. Our team will contact you shortly.');
    }
    
}
