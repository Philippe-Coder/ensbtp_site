@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold mb-8">Nos Offres</h1>
    @if($offres->count())
        @foreach($offres as $offre)
            <div class="mb-6 p-4 border rounded">
                <h2 class="text-xl font-bold">{{ $offre->title }}</h2>
                <p>{{ $offre->excerpt }}</p>
                <a href="/offres/{{ $offre->slug }}" class="text-blue-600">Voir plus</a>
            </div>
        @endforeach
    @else
        <p class="mb-4">Nos packs et offres :</p>
        <ul class="list-disc pl-6">
            <li>Tontine pour construire</li>
            <li>Prêt pour construction avec accompagnement complet</li>
            <li>Packs de souscription pour préparation d'avenir</li>
        </ul>
    @endif
</div>
@endsection
