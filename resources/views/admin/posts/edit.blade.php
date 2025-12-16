@extends('admin.layout')

@section('title','Modifier un Article')

@section('admin-content')
<div class="bg-white rounded-lg shadow-md p-8 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Modifier l'Article</h1>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Titre -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Titre *</label>
            <input type="text" name="title" required value="{{ old('title', $post->title) }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Catégorie -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Catégorie</label>
            <input type="text" name="category" value="{{ old('category', $post->category) }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                   placeholder="Ex: Technologie, Actualités, Conseils...">
        </div>

        <!-- Contenu -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Contenu *</label>
            <textarea name="content" rows="8" required
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image featured -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Image en vedette</label>
            @if($post->image)
                <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2">Image actuelle:</p>
                    <img src="{{ $post->image }}" class="h-32 rounded">
                </div>
            @endif
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                <input type="file" name="image" accept="image/jpeg,image/png,image/gif"
                       class="hidden" id="image-input">
                <label for="image-input" class="cursor-pointer">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20m-8-12l-3.172-3.172a4 4 0 00-5.656 0L28 12m0 0l4 4m-4-4v16"></path>
                    </svg>
                    <p class="mt-2 text-sm text-gray-600">Cliquez pour changer l'image</p>
                </label>
                <div id="image-preview" class="mt-4"></div>
            </div>
        </div>

        <!-- Boutons -->
        <div class="flex gap-4 pt-4">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Mettre à jour
            </button>
            <a href="{{ route('admin.posts.index') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">
                Annuler
            </a>
        </div>
    </form>
</div>

<script>
    document.getElementById('image-input').addEventListener('change', function(e) {
        const preview = document.getElementById('image-preview');
        preview.innerHTML = '';
        if (this.files.length > 0) {
            const reader = new FileReader();
            reader.onload = (event) => {
                preview.innerHTML = `<img src="${event.target.result}" class="h-32 mx-auto rounded">`;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@endsection