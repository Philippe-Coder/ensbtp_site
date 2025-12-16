@extends('layouts.app')

@section('content')
<section class="py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Breadcrumb / back link -->
            <div class="mb-6 flex items-center justify-between text-sm text-gray-500">
                <div class="flex items-center gap-2">
                    <a href="{{ route('realisations.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        <i class="fas fa-arrow-left mr-2"></i>
                        <span>Retour aux réalisations</span>
                    </a>
                </div>
                @if($realisation->created_at)
                    <div class="flex items-center gap-4">
                        <span class="flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-blue-500"></i>
                            <span>{{ $realisation->created_at->format('d/m/Y') }}</span>
                        </span>
                        @if(!empty($realisation->category))
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold uppercase tracking-wide">
                                {{ $realisation->category }}
                            </span>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Main title & excerpt -->
            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                    {{ $realisation->title }}
                </h1>
                @if($realisation->excerpt)
                    <p class="text-lg md:text-xl text-gray-700 max-w-3xl">
                        {{ $realisation->excerpt }}
                    </p>
                @endif
            </header>

            <!-- Layout: Gallery + details -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10 items-start">
                <!-- Media Gallery -->
                <div class="lg:col-span-2">
                    <div class="realisations-gallery bg-gray-50 rounded-2xl border border-gray-100 p-4 md:p-5 shadow-sm">
                        <div class="swiper realtimeSwiper rounded-xl overflow-hidden">
                            <div class="swiper-wrapper">
                                @if(is_array($realisation->media) && count($realisation->media))
                                    @foreach($realisation->media as $m)
                                        <div class="swiper-slide">
                                            @if(preg_match('/\.(mp4|mov|webm)$/i', $m))
                                                <video controls class="w-full h-full rounded-xl object-cover">
                                                    <source src="{{ $m }}" type="video/mp4">
                                                </video>
                                            @else
                                                <img src="{{ $m }}" alt="{{ $realisation->title }}" class="w-full h-full rounded-xl object-cover">
                                            @endif
                                        </div>
                                    @endforeach
                                @elseif($realisation->image)
                                    <div class="swiper-slide">
                                        <img src="{{ $realisation->image }}" alt="{{ $realisation->title }}" class="w-full h-full rounded-xl object-cover">
                                    </div>
                                @else
                                    <div class="swiper-slide">
                                        <div class="h-full bg-gradient-to-br from-blue-500 to-amber-500 flex items-center justify-center rounded-xl text-white/80 text-xl">
                                            <i class="fas fa-building text-4xl mr-3"></i>
                                            <span>Images en cours d'ajout</span>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Controls -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- Side info card -->
                <aside class="lg:col-span-1">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">
                        <h2 class="text-lg font-semibold text-gray-900 mb-1 flex items-center gap-2">
                            <i class="fas fa-info-circle text-blue-500"></i>
                            <span>Détails du projet</span>
                        </h2>

                        <dl class="space-y-3 text-sm text-gray-700">
                            @if($realisation->location ?? false)
                                <div class="flex items-start gap-3">
                                    <dt class="mt-0.5 text-gray-500">
                                        <i class="fas fa-map-marker-alt text-blue-500"></i>
                                    </dt>
                                    <dd>
                                        <div class="font-semibold">Localisation</div>
                                        <div>{{ $realisation->location }}</div>
                                    </dd>
                                </div>
                            @endif

                            @if($realisation->published_at)
                                <div class="flex items-start gap-3">
                                    <dt class="mt-0.5 text-gray-500">
                                        <i class="fas fa-calendar-check text-blue-500"></i>
                                    </dt>
                                    <dd>
                                        <div class="font-semibold">Date de livraison</div>
                                        <div>{{ $realisation->published_at->format('d/m/Y') }}</div>
                                    </dd>
                                </div>
                            @endif

                            @if(!empty($realisation->category))
                                <div class="flex items-start gap-3">
                                    <dt class="mt-0.5 text-gray-500">
                                        <i class="fas fa-layer-group text-blue-500"></i>
                                    </dt>
                                    <dd>
                                        <div class="font-semibold">Catégorie</div>
                                        <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold uppercase tracking-wide">
                                            {{ $realisation->category }}
                                        </div>
                                    </dd>
                                </div>
                            @endif
                        </dl>

                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-500 mb-3">
                                Vous avez un projet similaire ?
                            </p>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center w-full px-4 py-3 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition-colors duration-200">
                                <i class="fas fa-comments mr-2"></i>
                                <span>Discuter de mon projet</span>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>

            <!-- Full description -->
            @if($realisation->content)
            <section class="mt-10 md:mt-12 bg-gray-50 rounded-2xl border border-gray-100 p-6 md:p-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-file-alt text-blue-500"></i>
                    <span>Description du projet</span>
                </h2>
                <div class="prose max-w-none text-gray-800">
                    {!! nl2br(e($realisation->content)) !!}
                </div>
            </section>
            @endif
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .realisations-gallery .swiper {
        --swiper-navigation-color: #1d4ed8;
        --swiper-pagination-color: #1d4ed8;
    }

    .realisations-gallery .swiper-button-next,
    .realisations-gallery .swiper-button-prev {
        background: rgba(15, 23, 42, 0.6);
        color: #fff;
        width: 40px;
        height: 40px;
        border-radius: 9999px;
    }

    .realisations-gallery .swiper-button-next:after,
    .realisations-gallery .swiper-button-prev:after {
        font-size: 16px;
        font-weight: 700;
    }

    .realisations-gallery .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        opacity: 0.6;
        background: #64748b;
    }

    .realisations-gallery .swiper-pagination-bullet-active {
        opacity: 1;
        background: #1d4ed8;
    }

    /* Ensure all slides have a consistent height and centered content */
    .realisations-gallery .swiper-wrapper {
        height: 420px;
    }

    .realisations-gallery .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        background: #0f172a;
    }

    .realisations-gallery .swiper-slide img,
    .realisations-gallery .swiper-slide video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .realisations-gallery .swiper-wrapper {
            height: 300px;
        }
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.realtimeSwiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>
@endpush
