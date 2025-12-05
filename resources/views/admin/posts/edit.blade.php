@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold mb-6">Modifier l'Article</h1>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-medium">Titre</label>
            <input name="title" value="{{ old('title', $post->title) }}" class="w-full border p-3 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Slug (optionnel)</label>
            <input name="slug" value="{{ old('slug', $post->slug) }}" class="w-full border p-3 rounded">
        </div>
        <div>
            <label class="block font-medium">Contenu</label>
            <textarea name="content" rows="8" class="w-full border p-3 rounded">{{ old('content', $post->content) }}</textarea>
        </div>
        <div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded">Mettre à jour</button>
            <a href="{{ route('admin.posts.index') }}" class="ml-3 text-gray-600">Retour</a>
        </div>
    </form>
</div>
@endsection
