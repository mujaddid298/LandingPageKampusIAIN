<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class pengumuman extends Component
{
   public Collection $announcements;

    public function __construct($announcements)
    {
        $this->announcements = collect($announcements);
    }

    public function render()
    {
        return view('components.pengumuman');
    }
}
