<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pengumuman;

class PengumumanFilter extends Component
{
    public $search = '';
    public $year = '';


    
    public function render()
    {
        $announcements = Pengumuman::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('content', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->year, function ($query) {
                $query->whereYear('created_at', $this->year);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $years = Pengumuman::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('components.pengumuman-filter', [
            'announcements' => $announcements,
            'years' => $years,
        ]);
    }
}
