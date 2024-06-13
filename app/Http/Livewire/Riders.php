<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rider;

class Riders extends Component
{
    public $riders;

    public function mount()
    {
        $this->riders = Rider::all();
    }

    public function render()
    {
        return view('livewire.riders');
    }
}
