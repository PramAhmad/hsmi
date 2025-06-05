<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function register()
    {
        return view('front.membership.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|unique:members,nim',
            'email' => 'required|email|unique:members,email',
            'phone' => 'required|string',
            'semester' => 'required|integer|min:1|max:8',
            'motivation' => 'required|string',
        ]);

        // Store membership application logic here
        
        return back()->with('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda segera.');
    }
}