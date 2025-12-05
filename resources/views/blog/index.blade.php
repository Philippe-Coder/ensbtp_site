@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold mb-8">Blog</h1>

    @foreach($posts as $post)
        <div class="mb-6 p-4 border rounded">
            <h2 class="text-xl font-bold">{{ $post->title }}</h2>
            <a href="/blog/{{ $post->slug }}" class="text-blue-600">Lire l’article</a>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection
