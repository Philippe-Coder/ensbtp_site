<?php

namespace App\Http\Controllers;

use App\Models\FormContact;
use Illuminate\Http\Request;

class FormContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'nullable|string',
        ]);

        FormContact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'message' => $data['message'] ?? null,
        ]);

        return back()->with('success', 'Votre message a été reçu. Nous vous contacterons bientôt.');
    }
}
