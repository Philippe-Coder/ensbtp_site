@extends('admin.layout')

@section('title','Créer une Réalisation')

@section('admin-content')
<div class="bg-white rounded-lg shadow-md p-8 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Créer une Réalisation</h1>

    <form action="{{ route('admin.realisations.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Titre -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Titre *</label>
            <input type="text" name="title" required value="{{ old('title') }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                   placeholder="Titre de la réalisation">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Catégorie -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Catégorie</label>
            <input type="text" name="category" value="{{ old('category') }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                   placeholder="Ex: Bâtiment, Maison, Bureaux...">
        </div>

        <!-- Description courte -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Description courte</label>
            <textarea name="excerpt" rows="3"
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                      placeholder="Description courte de la réalisation">{{ old('excerpt') }}</textarea>
        </div>

        <!-- Contenu détaillé -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Description détaillée</label>
            <textarea name="content" rows="6"
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                      placeholder="Description complète du projet">{{ old('content') }}</textarea>
        </div>

        <!-- Image principale -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Image principale</label>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                <input type="file" name="image" accept="image/jpeg,image/png,image/gif"
                       class="hidden" id="image-input">
                <label for="image-input" class="cursor-pointer">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20m-8-12l-3.172-3.172a4 4 0 00-5.656 0L28 12m0 0l4 4m-4-4v16"></path>
                    </svg>
                    <p class="mt-2 text-sm text-gray-600">Cliquez pour télécharger une image</p>
                </label>
                <div id="image-preview" class="mt-4"></div>
            </div>
        </div>

        <!-- Galerie d'images supplémentaires -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Galerie d'images</label>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                <input type="file" name="media[]" accept="image/*,video/*" multiple
                       class="hidden" id="media-input">
                <label for="media-input" class="cursor-pointer">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20m-8-12l-3.172-3.172a4 4 0 00-5.656 0L28 12m0 0l4 4m-4-4v16"></path>
                    </svg>
                    <p class="mt-2 text-sm text-gray-600">Cliquez pour ajouter plusieurs images ou vidéos</p>
                </label>
                <div id="media-preview" class="mt-4 grid grid-cols-2 gap-4"></div>
            </div>
        </div>

        <!-- Date de publication -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Date de publication</label>
            <input type="date" name="published_at" value="{{ old('published_at') }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
        </div>

        <!-- Boutons -->
        <div class="flex gap-4 pt-4">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Créer la réalisation
            </button>
            <a href="{{ route('admin.realisations.index') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">
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

    document.getElementById('media-input').addEventListener('change', function(e) {
        const preview = document.getElementById('media-preview');
        preview.innerHTML = '';
        Array.from(this.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = (event) => {
                if (file.type.startsWith('image/')) {
                    preview.innerHTML += `<img src="${event.target.result}" class="h-24 w-full object-cover rounded">`;
                } else {
                    preview.innerHTML += `<div class="flex items-center justify-center h-24 bg-gray-200 rounded"><span class="text-gray-600">📹</span></div>`;
                }
            };
            reader.readAsDataURL(file);
        });
    });
</script>
@endsection
