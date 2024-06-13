<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RideRequestDetails extends Component
{
    public $details = 0;

    public function mount($id) {
        $this->details = $id;
    }

    public function render()
    {
        return view('livewire.riderequestdetails', [
            'details' => $this->details
        ]);
    }
}
