<?php

namespace App\Http\Controllers;

use App\Models\FormService;
use Illuminate\Http\Request;

class FormServiceController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'service' => 'required|string|max:255',
            'details' => 'nullable|string',
            'timeline' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
        ]);

        FormService::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'service_id' => null,  // We store the service name in message for now
            'message' => ($data['service'] ?? '') . ' | ' . ($data['details'] ?? '') . ' | Timeline: ' . ($data['timeline'] ?? ''),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Votre demande de service a été reçue. Nous vous contacterons bientôt.'
        ]);
    }
}
