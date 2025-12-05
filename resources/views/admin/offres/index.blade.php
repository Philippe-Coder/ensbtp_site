@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Gérer les Offres</h1>
        <a href="{{ route('admin.offres.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Nouvelle Offre</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <div class="bg-white rounded shadow">
        <table class="w-full table-auto">
            <thead>
                <tr class="text-left border-b">
                    <th class="p-3">Titre</th>
                    <th class="p-3">Prix</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($offres as $offre)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $offre->title }}</td>
                    <td class="p-3">{{ $offre->price ?? '—' }}</td>
                    <td class="p-3">
                        <a href="{{ route('admin.offres.edit', $offre) }}" class="text-blue-600 mr-3">Éditer</a>
                        <form action="{{ route('admin.offres.destroy', $offre) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer ?');">
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

    <div class="mt-6">{{ $offres->links() }}</div>
</div>
@endsection
