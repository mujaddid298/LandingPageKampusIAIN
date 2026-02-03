<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Prodi;

class AkreditasiJurusan extends Component
{
    public Collection $prodi;
    public $selectedDept = null;
    public $file = null;

    public function mount($prodi)
    {
        $this->prodi = collect($prodi);
    }

    public function selectDepartment($id)
    {
        $this->selectedDept = Prodi::find($id);

        // file berada di folder akreditasi
        $this->file = $this->selectedDept->file_akreditasi;
    }

    public function render()
    {
        return view('components.akreditasi-jurusan');
    }
}
