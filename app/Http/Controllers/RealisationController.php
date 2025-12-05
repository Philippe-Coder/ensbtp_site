<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('realisations.index', compact('realisations'));
    }

    public function show($slug)
    {
        $realisation = Realisation::where('slug', $slug)->firstOrFail();

        return view('realisations.show', compact('realisation'));
    }
}
