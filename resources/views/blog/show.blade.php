@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
    <p class="mt-4">{{ $post->content }}</p>
</div>
@endsection
