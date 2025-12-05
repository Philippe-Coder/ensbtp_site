<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::orderBy('created_at', 'desc')->get();
        return view('offres.index', compact('offres'));
    }

    public function show($slug)
    {
        $offre = Offre::where('slug', $slug)->firstOrFail();
        return view('offres.show', compact('offre'));
    }
}
