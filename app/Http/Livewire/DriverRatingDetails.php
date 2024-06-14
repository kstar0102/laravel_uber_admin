<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;
use App\Models\Driver;
use Illuminate\Support\Facades\DB;

class DriverRatingDetails extends Component
{
    public $details;

    public function mount($id)
    {
        $this->details = Driver::select('id', DB::raw("CONCAT(first_name, ' ', last_name) as driver_name"), "driver_photo")->where('id', $id)->first();

        $this->details->total_reviews = Review::where('driver_id', $this->details->id)
                                            ->whereRaw('type = 1')
                                            ->count('driver_id');
        $this->details->reviews = DB::table("review")
                                        ->select("review.*", "riders.name as rider_name")
                                        ->leftJoin("riders", "riders.id", "=", "review.rider_id")
                                        ->where('review.driver_id', $this->details->id)
                                        ->whereRaw('review.type = 1')
                                        ->get();

        $this->details->total_rating = Review::where('driver_id', $this->details->id)
                                            ->whereRaw('type = 1')
                                            ->sum('rating');

        if($this->details->total_reviews > 0) {
            $this->details->avg_rating = $this->details->total_rating / $this->details->total_reviews;
        } else {
            $this->details->avg_rating = 0;
        }
    }

    public function delete($id) {
        Review::where('id', $id)->delete();
        session()->flash('success', 'Review deleted successfully');
        $this->details = Driver::select('id', DB::raw("CONCAT(first_name, ' ', last_name) as driver_name"), "driver_photo")->where('id', $this->details->id)->first();

        $this->details->total_reviews = Review::where('driver_id', $this->details->id)
                                            ->whereRaw('type = 1')
                                            ->count('driver_id');
        $this->details->reviews = DB::table("review")
                                        ->select("review.*", "riders.name as rider_name")
                                        ->leftJoin("riders", "riders.id", "=", "review.rider_id")
                                        ->where('review.driver_id', $this->details->id)
                                        ->whereRaw('review.type = 1')
                                        ->get();

        $this->details->total_rating = Review::where('driver_id', $this->details->id)
                                            ->whereRaw('type = 1')
                                            ->sum('rating');

        if($this->details->total_reviews > 0) {
            $this->details->avg_rating = $this->details->total_rating / $this->details->total_reviews;
        } else {
            $this->details->avg_rating = 0;
        }
    }

    public function render()
    {
        return view('livewire.driverratingdetails');
    }
}
