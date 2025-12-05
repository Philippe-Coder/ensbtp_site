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
