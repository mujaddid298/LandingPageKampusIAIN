<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pengumuman;

class PengumumanFilter extends Component
{
    public $search = '';

    public function render()
    {
        $announcements = Pengumuman::when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->get();

        return view('livewire.pengumuman-filter', [
            'announcements' => $announcements
        ]);
    }
}
