@extends('admin.layout')

@section('title','Réalisation - Liste')

@section('admin-content')
<div class="flex items-center justify-between mb-4">
    <h2 class="text-xl font-semibold">Réalisation</h2>
    <a href="{{ route('admin.realisations.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Nouvelle</a>
</div>

<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Titre</th>
                <th class="px-4 py-2">Publié</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($realisations as $real)
            <tr class="border-t">
                <td class="px-4 py-3">{{ $real->title }}</td>
                <td class="px-4 py-3">{{ $real->published_at ? $real->published_at->format('Y-m-d') : '—' }}</td>
                <td class="px-4 py-3">
                    <a href="{{ route('admin.realisations.edit', $real) }}" class="text-blue-600 mr-2">Éditer</a>
                    <form action="{{ route('admin.realisations.destroy', $real) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer cette réalisation ?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $realisations->links() ?? '' }}
@endsection
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Gérer les Réalisations</h1>
        <a href="{{ route('admin.realisations.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Nouvelle Réalisation</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <div class="bg-white rounded shadow">
        <table class="w-full table-auto">
            <thead>
                <tr class="text-left border-b">
                    <th class="p-3">Titre</th>
                    <th class="p-3">Publié</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($realisations as $real)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $real->title }}</td>
                    <td class="p-3">{{ $real->published_at ? $real->published_at->format('Y-m-d') : '—' }}</td>
                    <td class="p-3">
                        <a href="{{ route('admin.realisations.edit', $real) }}" class="text-blue-600 mr-3">Éditer</a>
                        <form action="{{ route('admin.realisations.destroy', $real) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">{{ $realisations->links() }}</div>
</div>
@endsection
