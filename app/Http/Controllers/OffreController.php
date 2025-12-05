<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index()
    {
        return view('offres.index', [
            'offres' => Offre::all(),
        ]);
    }

    public function show($slug)
    {
        $offre = Offre::where('slug', $slug)->firstOrFail();
        return view('offres.show', compact('offre'));
    }
}
