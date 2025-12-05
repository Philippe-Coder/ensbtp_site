@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold mb-6">Modifier l'Offre</h1>

    <form action="{{ route('admin.offres.update', $offre) }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-medium">Titre</label>
            <input name="title" value="{{ old('title', $offre->title) }}" class="w-full border p-3 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Slug (optionnel)</label>
            <input name="slug" value="{{ old('slug', $offre->slug) }}" class="w-full border p-3 rounded">
        </div>
        <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" rows="6" class="w-full border p-3 rounded">{{ old('description', $offre->description) }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Prix</label>
            <input name="price" value="{{ old('price', $offre->price) }}" class="w-full border p-3 rounded">
        </div>
        <div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded">Mettre à jour</button>
            <a href="{{ route('admin.offres.index') }}" class="ml-3 text-gray-600">Retour</a>
        </div>
    </form>
</div>
@endsection
