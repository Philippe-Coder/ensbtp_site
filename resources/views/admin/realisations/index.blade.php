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
