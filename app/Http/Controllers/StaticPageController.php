<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function faq()
    {
        return view('front.static.faq');
    }

    public function privacy()
    {
        return view('front.static.privacy');
    }

    public function terms()
    {
        return view('front.static.terms');
    }

    public function guide()
    {
        return view('front.static.guide');
    }
}