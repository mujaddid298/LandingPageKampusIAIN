<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KalenderAkademik extends Component
{
    public function __construct(
        public string $campus = 'Institut Agama Islam Negeri Bengkalis',
        public ?string $file = null,
    ) {}

    public function render()
    {
        return view('components.kalender-akademik');
    }
}
