@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold">{{ $offre->title }}</h1>
    <p class="mt-4 text-gray-700 leading-relaxed">{{ $offre->description }}</p>

    <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-2xl font-semibold mb-4">Détails de l'offre</h3>
            <p class="text-gray-700 mb-4">{{ $offre->description }}</p>
            @if($offre->price)
                <p class="text-xl font-bold text-blue-700">Prix indicatif : {{ $offre->price }} CFA</p>
            @endif
            <ul class="mt-6 list-disc pl-6 text-gray-700">
                <li>Accompagnement complet pour la construction</li>
                <li>Plans architecturaux et structurels</li>
                <li>Suivi de chantier et contrôle qualité</li>
                <li>Options de tontine et prêt</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-2xl font-semibold mb-4">Souscrire à l'offre</h3>

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ url('/formulaire/offre') }}">
                @csrf
                <input type="hidden" name="offre_id" value="{{ $offre->id }}">

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Nom complet</label>
                    <input name="nom" required class="w-full mt-1 border rounded px-3 py-2" placeholder="Votre nom">
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full mt-1 border rounded px-3 py-2" placeholder="votre@email.com">
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input name="telephone" class="w-full mt-1 border rounded px-3 py-2" placeholder="+228 90 ...">
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Pack</label>
                    <select name="pack" class="w-full mt-1 border rounded px-3 py-2">
                        <option value="">-- Sélectionnez un pack --</option>
                        @php
                            use App\Models\Pack;
                            $packs = Pack::all();
                        @endphp
                        @if($packs->count())
                            @foreach($packs as $p)
                                <option value="{{ $p->code }}">{{ $p->name }} — {{ $p->min_salary ? number_format($p->min_salary) : '' }}{{ $p->max_salary ? ' - '.number_format($p->max_salary) : '' }}</option>
                            @endforeach
                        @else
                            <option value="Pack00">Pack00 : Privés / Commerçants / Diaspora</option>
                            <option value="Pack1">Pack1 : SMIG - jusqu'à 100 000 CFA</option>
                            <option value="Pack2">Pack2 : 100 001 - 200 000 CFA</option>
                            <option value="Pack3">Pack3 : 200 001 - 500 001 CFA</option>
                            <option value="Pack4">Pack4 : 600 000 - 999 999 CFA</option>
                            <option value="Pack5">Pack5 : 1 000 000 CFA et plus</option>
                        @endif
                    </select>
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Salaire approximatif (optionnel)</label>
                    <input name="salary" type="number" class="w-full mt-1 border rounded px-3 py-2" placeholder="ex: 150000">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="4" class="w-full mt-1 border rounded px-3 py-2" placeholder="Dites-nous en plus sur votre projet..."></textarea>
                </div>

                <div>
                    <button type="submit" class="w-full py-3 bg-blue-700 text-white rounded font-semibold">Souscrire / Demander</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection
