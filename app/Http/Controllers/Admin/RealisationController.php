<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.realisations.index', compact('realisations'));
    }

    public function create()
    {
        return view('admin.realisations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
            'media.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,mov,webm|max:10240'
        ]);

        // Upload main image
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('realisations', 'public');
            $data['image'] = Storage::url($path);
        }

        $media = [];
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('realisations', 'public');
                $media[] = Storage::url($path);
            }
        }

        $data['media'] = $media;

        Realisation::create($data);

        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation créée');
    }

    public function edit(Realisation $realisation)
    {
        return view('admin.realisations.edit', compact('realisation'));
    }

    public function update(Request $request, Realisation $realisation)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
            'media.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,mov,webm|max:10240'
        ]);

        // Upload main image if provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('realisations', 'public');
            $data['image'] = Storage::url($path);
        }

        $media = $realisation->media ?? [];
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('realisations', 'public');
                $media[] = Storage::url($path);
            }
        }

        $data['media'] = $media;

        $realisation->update($data);

        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation mise à jour');
    }

    public function destroy(Realisation $realisation)
    {
        // Note: we do not delete storage files here automatically.
        $realisation->delete();
        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation supprimée');
    }
}
