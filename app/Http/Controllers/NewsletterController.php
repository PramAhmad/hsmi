<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        // Store newsletter subscription logic here
        
        return back()->with('success', 'Berhasil berlangganan newsletter HMSI!');
    }
}