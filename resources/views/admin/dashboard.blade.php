@extends('layouts.app')

@section('content')
<div class="container py-12 mx-auto">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-4 bg-white rounded shadow">
            <h2 class="font-semibold">Réalisation</h2>
            <p class="text-2xl">{{ $counts['realisations'] }}</p>
            <a href="{{ route('admin.realisations.create') }}" class="text-blue-600">Ajouter</a>
        </div>

        <div class="p-4 bg-white rounded shadow">
            <h2 class="font-semibold">Articles</h2>
            <p class="text-2xl">{{ $counts['posts'] }}</p>
            <a href="{{ route('admin.posts.create') }}" class="text-blue-600">Publier</a>
        </div>

        <div class="p-4 bg-white rounded shadow">
            <h2 class="font-semibold">Messages</h2>
            <p class="text-2xl">{{ ($counts['services'] ?? 0) + ($counts['offre_subscriptions'] ?? 0) + ($counts['accompagnements'] ?? 0) + ($counts['contacts'] ?? 0) }}</p>
            <a href="{{ route('admin.messages') }}" class="text-blue-600">Voir</a>
        </div>
    </div>
</div>

@endsection
