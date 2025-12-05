@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold mb-6">Modifier la Réalisation</h1>

    <form action="{{ route('admin.realisations.update', $realisation) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-medium">Titre</label>
            <input name="title" value="{{ old('title', $realisation->title) }}" class="w-full border p-3 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Slug (optionnel)</label>
            <input name="slug" value="{{ old('slug', $realisation->slug) }}" class="w-full border p-3 rounded">
        </div>
        <div>
            <label class="block font-medium">Extrait</label>
            <input name="excerpt" value="{{ old('excerpt', $realisation->excerpt) }}" class="w-full border p-3 rounded">
        </div>
        <div>
            <label class="block font-medium">Contenu</label>
            <textarea name="content" rows="6" class="w-full border p-3 rounded">{{ old('content', $realisation->content) }}</textarea>
        </div>

        <div>
            <label class="block font-medium">Médias actuels</label>
            <div class="grid grid-cols-3 gap-3 mb-3">
                @if(is_array($realisation->media))
                    @foreach($realisation->media as $m)
                        <div class="p-2 border rounded">
                            @if(preg_match('/\.(mp4|mov|webm)$/i', $m))
                                <video src="{{ $m }}" class="w-full" controls></video>
                            @else
                                <img src="{{ $m }}" class="w-full object-cover">
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div>
            <label class="block font-medium">Ajouter des médias (optionnel)</label>
            <input type="file" name="media[]" multiple class="w-full">
        </div>

        <div>
            <label class="block font-medium">Publié le</label>
            <input type="datetime-local" name="published_at" value="{{ optional($realisation->published_at)->format('Y-m-d\TH:i') }}" class="w-full border p-3 rounded">
        </div>

        <div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded">Mettre à jour</button>
            <a href="{{ route('admin.realisations.index') }}" class="ml-3 text-gray-600">Retour</a>
        </div>
    </form>
</div>
@endsection
