@extends('admin.layout')

@section('title','Tableau de bord')

@section('admin-content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-sm text-gray-500">Réalisation(s)</h3>
        <div class="text-3xl font-bold">{{ $counts['realisations'] ?? 0 }}</div>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-sm text-gray-500">Articles</h3>
        <div class="text-3xl font-bold">{{ $counts['posts'] ?? 0 }}</div>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-sm text-gray-500">Souscriptions Offres</h3>
        <div class="text-3xl font-bold">{{ $counts['offre_subscriptions'] ?? 0 }}</div>
    </div>
</div>

<div class="mt-8">
    <h2 class="text-lg font-semibold">Actions rapides</h2>
    <div class="mt-4 flex gap-4">
        <a href="{{ route('admin.realisations.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Nouvelle réalisation</a>
        <a href="{{ route('admin.posts.create') }}" class="px-4 py-2 bg-green-600 text-white rounded">Publier un article</a>
        <a href="{{ route('admin.messages') }}" class="px-4 py-2 bg-gray-600 text-white rounded">Voir demandes</a>
    </div>
</div>
@endsection
@extends('layouts.app')
