<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Realisation;
use App\Models\Offre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'services' => Service::take(3)->get(),
            'realisations' => Realisation::take(3)->get(),
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
