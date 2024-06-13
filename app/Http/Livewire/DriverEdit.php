<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Driver;
use Livewire\WithFileUploads;

class DriverEdit extends Component
{
    use WithFileUploads;

    public $driver;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $car_type;
    public $car_color;
    public $car_number;
    public $rating;
    public $license_verification;
    public $driver_photo;
    public $car_photo;
    public $passport_frontend;
    public $passport_backend;
    public $password;
    public $password_confirmation;

    public function mount($id)
    {
        $this->driver = Driver::findOrFail($id);

        $this->first_name = $this->driver->first_name;
        $this->last_name = $this->driver->last_name;
        $this->email = $this->driver->email;
        $this->phone_number = $this->driver->phone_number;
        $this->car_type = $this->driver->car_type;
        $this->car_color = $this->driver->car_color;
        $this->car_number = $this->driver->car_number;
        $this->rating = $this->driver->rating;
        $this->license_verification = $this->driver->license_verification;
        $this->driver_photo = $this->driver->driver_photo;
        $this->car_photo = $this->driver->car_photo;
        $this->passport_frontend = $this->driver->passport_frontend;
        $this->passport_backend = $this->driver->passport_backend;
    }

    public function updateDriver()
    {
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:drivers,email,' . $this->driver->id,
            'phone_number' => 'required|string|max:20',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $updateData = [];
        
        // Check and update only if changed
        if ($this->first_name !== $this->driver->first_name) {
            $updateData['first_name'] = $validatedData['first_name'];
        }
        if ($this->last_name !== $this->driver->last_name) {
            $updateData['last_name'] = $validatedData['last_name'];
        }
        if ($this->email !== $this->driver->email) {
            $updateData['email'] = $validatedData['email'];
        }
        if ($this->phone_number !== $this->driver->phone_number) {
            $updateData['phone_number'] = $validatedData['phone_number'];
        }
        if ($this->car_type !== $this->driver->car_type) {
            $updateData['car_type'] = $this->car_type;
        }
        if ($this->car_color !== $this->driver->car_color) {
            $updateData['car_color'] = $this->car_color;
        }
        if ($this->car_number !== $this->driver->car_number) {
            $updateData['car_number'] = $this->car_number;
        }
        if ($this->rating !== $this->driver->rating) {
            $updateData['rating'] = $this->rating;
        }
        if ($this->license_verification !== $this->driver->license_verification) {
            $updateData['license_verification'] = $this->license_verification;
        }

        if (!empty($this->password)) {
            $updateData['password'] = bcrypt($this->password);
        }

        if ($this->driver_photo) {
            $updateData['driver_photo'] = $this->driver_photo->store('assets/img', 'public');
        }
        if ($this->car_photo) {
            $updateData['car_photo'] = $this->car_photo->store('assets/img', 'public');
        }
        if ($this->passport_frontend) {
            $updateData['passport_frontend'] = $this->passport_frontend->store('assets/img', 'public');
        }
        if ($this->passport_backend) {
            $updateData['passport_backend'] = $this->passport_backend->store('assets/img', 'public');
        }

        // Directly update the driver using the ID
        Driver::where('id', $this->driver->id)->update($updateData);

        session()->flash('message', 'Driver updated successfully.');

        return redirect()->to('/drivers');
    }

    public function render()
    {
        return view('livewire.driver-edit');
    }
}


