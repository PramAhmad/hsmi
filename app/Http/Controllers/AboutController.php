<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function profil()
    {
        return view('front.about.profil');
    }

    public function visiMisi()
    {
        return view('front.about.visi-misi');
    }

    public function struktur()
    {
        return view('front.about.struktur');
    }

    public function sejarah()
    {
        return view('front.about.sejarah');
    }
}