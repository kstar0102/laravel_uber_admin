<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RiderRatingDetails extends Component
{
    public $details = 0;

    public function mount($id) {
        $this->details = $id;
    }

    public function render()
    {
        return view('livewire.riderratingdetails', [
            'details' => $this->details
        ]);
    }
}
