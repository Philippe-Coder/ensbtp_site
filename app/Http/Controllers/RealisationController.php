<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        return view('realisations.index', [
            'realisations' => Realisation::all(),
        ]);
    }

    public function show($slug)
    {
        $realisation = Realisation::where('slug', $slug)->firstOrFail();
        return view('realisations.show', compact('realisation'));
    }
}
