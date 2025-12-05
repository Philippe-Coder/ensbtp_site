@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold">{{ $realisation->title }}</h1>
    <p class="mt-4">{{ $realisation->description }}</p>
</div>
@endsection
