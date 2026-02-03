<div x-cloak x-data="{
    current: 0,
    slides: [{
            title: 'Website Kampus Modern',
            desc: 'Informasi akademik terintegrasi',
            image: '{{ url('images/1.jpg') }}'

        },
        {
            title: 'Sistem Informasi Terpadu',
            desc: 'Mudah, cepat, dan efisien',
            image: '{{ url('images/2.jpg') }}'

        },
        {
            title: 'Akreditasi & Prestasi',
            desc: 'Kampus unggul dan berdaya saing',
            image: '{{ url('images/3.jpg') }}'

        }
    ]
}" x-init="$nextTick(() => {
    setInterval(() => {
        current = (current + 1) % slides.length
    }, 4000)
})"
    class="relative w-full
           h-[70vh] sm:h-[75vh] md:h-[85vh] lg:h-screen
           overflow-hidden">
    <template x-for="(slide, index) in slides" :key="index">
        <template x-if="current === index">
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-700"
                :style="`background-image: url('${slide.image}')`">
                <!-- Overlay -->
                <div class="w-full h-full bg-black/60
                           flex items-center">
                    <!-- Content -->
                    <div
                        class="text-white
                               max-w-xl
                               px-6 sm:px-10 md:px-16">
                        <h1 class="font-bold
                                   text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                                   mb-3 md:mb-4"
                            x-text="slide.title"></h1>

                        <p class="text-sm sm:text-base md:text-lg lg:text-xl
                                   leading-relaxed"
                            x-text="slide.desc"></p>
                    </div>
                </div>
            </div>
        </template>
    </template>

</div>
