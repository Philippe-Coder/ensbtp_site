<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormService;
use App\Models\FormOffre;
use App\Models\FormAccompagnement;
use App\Models\Pack;

class FormulaireController extends Controller
{
    public function service(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'service_id' => 'nullable|integer|exists:services,id',
            'pack_id' => 'nullable|integer|exists:packs,id',
            'message' => 'nullable|string',
        ]);

        FormService::create($data);
        return back()->with('success', 'Votre demande de service a été envoyée.');
    }

    public function offre(Request $request)
    {
        // Accept both English and French form field names (nom/telephone/pack)
        $payload = $request->all();

        if ($request->filled('nom')) {
            $payload['name'] = $request->input('nom');
        }

        if ($request->filled('telephone')) {
            $payload['phone'] = $request->input('telephone');
        }

        // If pack is provided as code (Pack1, Pack2...), find its id
        if ($request->filled('pack')) {
            $pack = Pack::where('code', $request->input('pack'))->first();
            if ($pack) {
                $payload['pack_id'] = $pack->id;
            }
        }

        $data = collect($payload)->only(['name','email','phone','offre_id','pack_id','salary','message'])->toArray();

        $validated = validator($data, [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'offre_id' => 'nullable|integer|exists:offres,id',
            'pack_id' => 'nullable|integer|exists:packs,id',
            'salary' => 'nullable|numeric',
            'message' => 'nullable|string',
        ])->validate();

        FormOffre::create($validated);
        return back()->with('success', 'Votre souscription à l\'offre a été envoyée.');
    }

    public function accompagnement(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'pack_id' => 'nullable|integer|exists:packs,id',
            'message' => 'nullable|string',
        ]);

        FormAccompagnement::create($data);
        return back()->with('success', 'Votre demande d\'accompagnement a été envoyée.');
    }
}
