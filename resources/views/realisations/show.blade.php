@extends('layouts.app')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">{{ $realisation->title }}</h1>
            <p class="text-gray-700 mb-6">{{ $realisation->excerpt }}</p>

            <!-- Swiper gallery -->
            <div class="realisations-gallery mb-8">
                <div class="swiper realtimeSwiper">
                    <div class="swiper-wrapper">
                        @if(is_array($realisation->media) && count($realisation->media))
                            @foreach($realisation->media as $m)
                                <div class="swiper-slide">
                                    @if(preg_match('/\.(mp4|mov|webm)$/i', $m))
                                        <video controls class="w-full rounded-lg">
                                            <source src="{{ $m }}" type="video/mp4">
                                        </video>
                                    @else
                                        <img src="{{ $m }}" alt="{{ $realisation->title }}" class="w-full rounded-lg object-cover">
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <div class="h-64 bg-gray-200 flex items-center justify-center">Aucune image</div>
                            </div>
                        @endif
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="prose max-w-none">
                {!! nl2br(e($realisation->content)) !!}
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.realtimeSwiper', {
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: { el: '.swiper-pagination', clickable: true },
        });
    });
</script>
@endpush
@extends('layouts.app')

@section('content')
<div class="container py-16 mx-auto">
    <h1 class="text-3xl font-bold">{{ $realisation->title }}</h1>
    <p class="mt-4">{{ $realisation->description }}</p>
</div>
@endsection
