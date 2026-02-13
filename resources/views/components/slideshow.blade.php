<div x-cloak
    x-data="{
        current: 0,
        slides: @js($slideshow->map(fn($s) => [
            'image' => asset('storage/' . $s->image)
        ])),
        next() {
            this.current = (this.current + 1) % this.slides.length
        },
        prev() {
            this.current = (this.current - 1 + this.slides.length) % this.slides.length
        }
    }"
    x-init="$nextTick(() => {
        setInterval(() => {
            next()
        }, 6000)
    })"
    class="relative w-full
           h-[70vh] sm:h-[75vh] md:h-[85vh] lg:h-screen
           overflow-hidden
           group">

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="current === index"
            x-transition:enter="transition-opacity duration-700"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-700"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-cover bg-center"
            :style="`background-image: url('${slide.image}')`">
            
            <div class="w-full h-full bg-black/20"></div>
        </div>
    </template>

    <!-- Left Arrow -->
    <button @click="prev()"
        class="absolute left-5 top-1/2 -translate-y-1/2
               bg-white/20 backdrop-blur-sm
               text-white p-3 rounded-full
               opacity-0 group-hover:opacity-100
               transition duration-300">
        &#10094;
    </button>

    <!-- Right Arrow -->
    <button @click="next()"
        class="absolute right-5 top-1/2 -translate-y-1/2
               bg-white/20 backdrop-blur-sm
               text-white p-3 rounded-full
               opacity-0 group-hover:opacity-100
               transition duration-300">
        &#10095;
    </button>

</div>
