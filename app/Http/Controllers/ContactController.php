<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'nom' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telephone' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        $payload = $request->all();
        if ($request->filled('nom')) {
            $payload['name'] = $request->input('nom');
        }
        if ($request->filled('telephone')) {
            $payload['phone'] = $request->input('telephone');
        }

        FormContact::create([
            'name' => $payload['name'] ?? null,
            'email' => $payload['email'] ?? null,
            'phone' => $payload['phone'] ?? null,
            'message' => $payload['message'] ?? null,
        ]);

        return back()->with('success', 'Merci, votre message a été envoyé.');
    }
}
