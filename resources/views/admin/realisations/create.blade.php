@extends('admin.layout')

@section('title','Créer une réalisation')

@section('admin-content')
<form action="{{ route('admin.realisations.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
    @csrf
    <div class="grid grid-cols-1 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="title" class="mt-1 block w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" class="mt-1 block w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Extrait</label>
            <textarea name="excerpt" rows="3" class="mt-1 block w-full border rounded px-3 py-2"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Contenu</label>
            <textarea name="content" rows="6" class="mt-1 block w-full border rounded px-3 py-2"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Médias (images multiples)</label>
            <input type="file" name="media[]" multiple class="mt-1 block w-full" accept="image/*">
        </div>
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="publish_now" value="1" class="mr-2"> Publier maintenant
            </label>
        </div>
        <div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded">Enregistrer</button>
        </div>
    </div>
</form>
@endsection
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold mb-6">Nouvelle Réalisation</h1>

    <form action="{{ route('admin.realisations.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded shadow">
        @csrf
        <div>
            <label class="block font-medium">Titre</label>
            <input name="title" class="w-full border p-3 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Slug (optionnel)</label>
            <input name="slug" class="w-full border p-3 rounded">
        </div>
        <div>
            <label class="block font-medium">Extrait</label>
            <input name="excerpt" class="w-full border p-3 rounded">
        </div>
        <div>
            <label class="block font-medium">Contenu</label>
            <textarea name="content" rows="6" class="w-full border p-3 rounded"></textarea>
        </div>
        <div>
            <label class="block font-medium">Médias (images/vidéos) — multiple</label>
            <input type="file" name="media[]" multiple class="w-full">
        </div>
        <div>
            <label class="block font-medium">Publié le</label>
            <input type="datetime-local" name="published_at" class="w-full border p-3 rounded">
        </div>
        <div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded">Enregistrer</button>
            <a href="{{ route('admin.realisations.index') }}" class="ml-3 text-gray-600">Annuler</a>
        </div>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-12 mx-auto">
    <h1 class="text-2xl font-bold mb-6">Ajouter une réalisation</h1>

    <form method="POST" action="{{ route('admin.realisations.store') }}">
        @csrf

        <input type="text" name="title" placeholder="Titre" class="border p-2 block mb-3 w-full" required>
        <input type="text" name="slug" placeholder="slug-unique" class="border p-2 block mb-3 w-full" required>

        <textarea name="description" placeholder="Description" class="border p-2 block mb-3 w-full" rows="6"></textarea>

        <button class="bg-blue-600 text-white py-2 px-4 rounded">Enregistrer</button>
    </form>
</div>

@endsection
