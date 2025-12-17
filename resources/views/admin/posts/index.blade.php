@extends('admin.layout')

@section('title','Articles - Liste')

@section('admin-content')
<div class="flex items-center justify-between mb-4">
    <h2 class="text-xl font-semibold">Articles</h2>
    <a href="{{ route('admin.posts.create') }}" class="px-4 py-2 bg-green-600 text-white rounded">Nouveau</a>
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
            @foreach($posts as $post)
            <tr class="border-t">
                <td class="px-4 py-3">{{ $post->title }}</td>
                <td class="px-4 py-3">{{ $post->published_at ? $post->published_at->format('Y-m-d') : '—' }}</td>
                <td class="px-4 py-3">
                    <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-600 mr-2">Éditer</a>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer cet article ?')">
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

{{ $posts->links() ?? '' }}
@endsection
