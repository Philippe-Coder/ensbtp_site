<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.offres.index', compact('offres'));
    }

    public function create()
    {
        return view('admin.offres.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:offres,slug',
            'description' => 'nullable|string',
            'price' => 'nullable|string|max:50',
        ]);

        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        Offre::create($data);
        return redirect()->route('admin.offres.index')->with('success', 'Offre créée');
    }

    public function edit(Offre $offre)
    {
        return view('admin.offres.edit', compact('offre'));
    }

    public function update(Request $request, Offre $offre)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:offres,slug,' . $offre->id,
            'description' => 'nullable|string',
            'price' => 'nullable|string|max:50',
        ]);

        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        $offre->update($data);

        return redirect()->route('admin.offres.index')->with('success', 'Offre mise à jour');
    }

    public function destroy(Offre $offre)
    {
        $offre->delete();
        return redirect()->route('admin.offres.index')->with('success', 'Offre supprimée');
    }
}
