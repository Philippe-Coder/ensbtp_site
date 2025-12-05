@extends('admin.layout')

@section('title','Créer un article')

@section('admin-content')
<form action="{{ route('admin.posts.store') }}" method="POST" class="bg-white p-6 rounded shadow">
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
            <label class="block text-sm font-medium text-gray-700">Contenu</label>
            <textarea name="content" rows="8" class="mt-1 block w-full border rounded px-3 py-2"></textarea>
        </div>
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="publish_now" value="1" class="mr-2"> Publier maintenant
            </label>
        </div>
        <div>
            <button class="px-4 py-2 bg-green-600 text-white rounded">Publier</button>
        </div>
    </div>
</form>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-12 mx-auto">
    <h1 class="text-2xl font-bold mb-6">Publier un article</h1>

    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

        <input type="text" name="title" placeholder="Titre" class="border p-2 block mb-3 w-full" required>
        <input type="text" name="slug" placeholder="slug-unique" class="border p-2 block mb-3 w-full" required>

        <textarea name="content" placeholder="Contenu" class="border p-2 block mb-3 w-full" rows="8"></textarea>

        <button class="bg-blue-600 text-white py-2 px-4 rounded">Publier</button>
    </form>
</div>

@endsection
