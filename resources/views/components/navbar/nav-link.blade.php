@props(['href', 'active' => false])

<a href="{{ $href }}"
   @class([
       'relative font-medium transition',
       'text-[#E7BB00]' => $active,
       'text-gray-700 hover:text-[#E7BB00]' => !$active,
       'after:absolute after:left-1/2 after:-bottom-1
        after:h-[2px] after:w-0 after:bg-gradient-to-r
        after:from-[#E7BB00] after:to-yellow-400
        after:transition-all after:duration-300 after:-translate-x-1/2
        hover:after:w-full'
   ])>
    {{ $slot }}
</a>
