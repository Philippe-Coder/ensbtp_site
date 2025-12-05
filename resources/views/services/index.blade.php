@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold mb-8">Nos Services</h1>
    @if($services->count())
        @foreach($services as $service)
            <div class="mb-6 p-4 border rounded">
                <h2 class="text-xl font-bold">{{ $service->title }}</h2>
                <p>{{ $service->excerpt }}</p>
                <a href="/services/{{ $service->slug }}" class="text-blue-600">Voir plus</a>
            </div>
        @endforeach
    @else
        <p class="mb-4">Nous proposons :</p>
        <ul class="list-disc pl-6">
            <li>Bâtiment - travaux publics (routes, assainissement, pavage)</li>
            <li>Espace vert et maintenance</li>
            <li>Conseils en construction, topographie</li>
            <li>Conception architecturale et structurale</li>
            <li>Études géotechniques et laboratoire</li>
            <li>Suivi de projets et contrôle architectural/structural</li>
            <li>Réalisation de bâtiments privés et publics</li>
        </ul>
    @endif
</div>
@endsection
