<!-- Header partial: includes top contact bar and the main navigation -->
<div class="w-full bg-gradient-to-r from-white to-white/95 shadow-sm">
    <div class="container mx-auto px-4 py-2 hidden md:flex items-center justify-between text-sm text-gray-700">
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2">
                <i class="fas fa-phone-alt text-blue-600"></i>
                <a href="tel:+28890108803" class="font-medium text-gray-800">+288 90 10 88 03</a>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-envelope text-cyan-600"></i>
                <a href="mailto:ens.btp@yahoo.com" class="text-gray-600">ens.btp@yahoo.com</a>
            </div>
        </div>
        <div class="text-gray-500">Ouvert: Lun - Ven, 8:00 - 18:00</div>
    </div>

    {{-- Reuse existing navigation blade to keep consistency --}}
    @includeIf('layouts.navigation')
</div>
