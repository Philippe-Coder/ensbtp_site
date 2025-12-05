<?php

namespace App\Http\Controllers;

use App\Models\FormOffre;
use Illuminate\Http\Request;

class FormOffreController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'offre_id' => 'nullable|integer|exists:offres,id',
            'pack' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // map pack to pack_id if provided (we accept either pack name or offre_id)
        if (isset($data['pack']) && empty($data['offre_id'])) {
            $data['pack_id'] = null;
        }

        FormOffre::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'offre_id' => $data['offre_id'] ?? null,
            'pack_id' => $data['pack'] ?? null,
            'salary' => $data['salary'] ?? null,
            'message' => $data['message'] ?? null,
        ]);

        return back()->with('success', 'Votre demande a été reçue. Nous vous contacterons bientôt.');
    }
}
