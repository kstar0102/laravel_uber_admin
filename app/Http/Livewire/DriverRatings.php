<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\Driver;

class DriverRatings extends Component
{
    public $ratings;

    public function mount()
    {
        $this->ratings = Driver::select('id', DB::raw("CONCAT(first_name, ' ', last_name) as driver_name"))->get();
        foreach($this->ratings as $item) {
            $item->total_reviews = Review::where('driver_id', $item->id)
                                                ->whereRaw('type = 1')
                                                ->count('driver_id');
            $item->total_rating = Review::where('driver_id', $item->id)
                                                ->whereRaw('type = 1')
                                                ->sum('rating');

            if($item->total_reviews > 0) {
                $item->avg_rating = $item->total_rating / $item->total_reviews;
            } else {
                $item->avg_rating = 0;
            }
        }
    }

    public function render()
    {
        return view('livewire.driverratings');
    }
}
