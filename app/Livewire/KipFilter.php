<?php

namespace App\Livewire;

use App\Models\Kip;
use Livewire\Component;

class KipFilter extends Component
{
    public $search = '';
    public $year = '';



    public function render()
    {
        $kip = Kip::query()
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

        $years = Kip::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('components.kip-filter', [
            'kip' => $kip,
            'years' => $years,
        ]);
    }
}
