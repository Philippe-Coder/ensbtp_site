@props(['images' => [], 'showControls' => true])

<section class="relative flex items-center justify-center overflow-hidden" style="min-height:680px;">
    <!-- Background Image Carousel -->
    @if(is_array($images) && count($images) > 1)
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 swiper bannerSwiper w-full h-full">
                <div class="swiper-wrapper w-full h-full">
                    @foreach($images as $img)
                        @php
                            $name = trim($img);
                            $bannerPath = 'images/banners/' . $name;
                            $fallbackPath = 'images/' . $name;
                            $url = file_exists(public_path($bannerPath)) ? asset($bannerPath) : asset($fallbackPath);
                        @endphp
                        <div class="swiper-slide w-full h-full">
                            <img src="{{ $url }}" alt="Banner slide" class="w-full h-full object-cover" />
                        </div>
                    @endforeach
                </div>
                <!-- Pagination Bullets -->
                <div class="swiper-pagination absolute bottom-8 left-1/2 -translate-x-1/2 z-20"></div>
                
                <!-- Navigation Arrows -->
                @if($showControls)
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                @endif
            </div>
            <!-- Blue Overlay -->
            <div class="absolute inset-0 bg-blue-500/30 backdrop-blur-sm pointer-events-none z-5"></div>
        </div>
    @else
        <div class="absolute inset-0 z-0">
            @php
                $img = $images[0] ?? 'img1.jpg';
                $name = trim($img);
                $bannerPath = 'images/banners/' . $name;
                $fallbackPath = 'images/' . $name;
                $url = file_exists(public_path($bannerPath)) ? asset($bannerPath) : asset($fallbackPath);
            @endphp
            <img src="{{ $url }}" alt="Banner" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-blue-500/30 backdrop-blur-sm pointer-events-none z-5"></div>
        </div>
    @endif

    <!-- Content Overlay -->
    <div class="container mx-auto px-4 relative z-10 py-20">
        {{ $slot }}
    </div>

    @once
        @push('styles')
        <style>
            .bannerSwiper { width:100%; height:100%; }
            .bannerSwiper .swiper-wrapper { width:100%; height:100%; }
            .bannerSwiper .swiper-slide { width:100%; height:100%; }
            .bannerSwiper .swiper-slide img { display: block; width:100%; height:100%; object-fit: cover; }
            .swiper-pagination-bullet { background: rgba(255,255,255,0.6); }
            .swiper-pagination-bullet-active { background: rgba(255,255,255,1); }
            
            /* Custom Swiper Navigation Buttons */
            .bannerSwiper .swiper-button-prev,
            .bannerSwiper .swiper-button-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 48px;
                height: 48px;
                background: rgba(255,255,255,0.3);
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 18px;
                z-index: 20;
                transition: background 0.3s;
                border: none;
            }
            
            .bannerSwiper .swiper-button-prev:hover,
            .bannerSwiper .swiper-button-next:hover {
                background: rgba(255,255,255,0.5);
            }
            
            .bannerSwiper .swiper-button-prev { left: 24px; }
            .bannerSwiper .swiper-button-next { right: 24px; }
            
            /* Hide Swiper's default arrows */
            .bannerSwiper .swiper-button-prev::after,
            .bannerSwiper .swiper-button-next::after {
                content: '';
            }
        </style>
        @endpush

        @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if(document.querySelector('.bannerSwiper')) {
                    window.bannerSwipers = window.bannerSwipers || [];
                    document.querySelectorAll('.bannerSwiper').forEach(function(container, idx){
                        const swiper = new Swiper(container, {
                            loop: true,
                            speed: 1200,
                            autoplay: { delay: 5000, disableOnInteraction: false },
                            slidesPerView: 1,
                            effect: 'slide',
                            pagination: {
                                el: container.querySelector('.swiper-pagination'),
                                clickable: true,
                                type: 'bullets'
                            },
                            navigation: {
                                nextEl: container.querySelector('.swiper-button-next'),
                                prevEl: container.querySelector('.swiper-button-prev')
                            }
                        });
                        window.bannerSwipers.push(swiper);
                    });
                }
            });
        </script>
        @endpush
    @endonce
</section>
