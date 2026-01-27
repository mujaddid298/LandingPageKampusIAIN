<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Peprodi extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = 'Nama Pengelola Prodi',
        public string $prodi = 'Program Studi',
        public string $nowa = '09345456464',
        public ?string $image = null,
    )
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.peprodi');
    }
}
