<title>Driver Edit</title>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="/">Volt</a></li>
                <li class="breadcrumb-item"><a href="/drivers">Drivers List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Driver Edit</li>
            </ol>
        </nav>
        <h2 class="h4">Drivers Detail</h2>
    </div>
</div>

<form wire:submit.prevent="updateDriver">
    <div class = "row">
        <div class="col-12 col-xl-4">
            <div class="col-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Select profile photo</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            @if($driver_photo)
                                <img src="{{ asset('storage/' . $driver_photo) }}" class="rounded avatar-xl" alt="Driver Photo">
                            @else
                                <img class="rounded avatar-xl" src="{{ asset('assets/img/profile_default.jpg') }}" alt="change avatar">
                            @endif
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <input wire:model="driver_photo" class="form-control" id="driver_photo" type="file" accept="image/*">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Select car photo</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            @if($car_photo)
                                <img src="{{ asset('storage/' . $car_photo) }}" class="rounded avatar-xl" alt="Car Photo">
                            @else
                                <img class="rounded avatar-xl" src="{{ asset('assets/img/car_default.png') }}" alt="change avatar">
                            @endif
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <input wire:model="car_photo" class="form-control" id="car_photo" type="file" accept="image/*">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="first_name">First Name</label>
                        <input wire:model.lazy="first_name" class="form-control" id="first_name" type="text" placeholder="Enter your first name" value="{{$first_name}}">
                        @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="last_name">Last Name</label>
                        <input wire:model.lazy="driver.last_name" class="form-control" id="last_name" type="text" placeholder="Enter your last name" value="{{$last_name}}">
                        @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input wire:model.lazy="driver.email" class="form-control" id="email" type="email" placeholder="name@company.com" value="{{$email}}">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone_number">Phone Number</label>
                        <input wire:model.lazy="driver.phone_number" class="form-control" id="phone_number" type="text" placeholder="+1-234 567 8910" value="{{$phone_number}}">
                        @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="car_type">Car Type</label>
                        <input wire:model.lazy="driver.car_type" class="form-control" id="car_type" type="text" placeholder="Enter your car's type" value="{{$car_type}}">
                        @error('car_type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="car_color">Car Color</label>
                        <input wire:model.lazy="driver.car_color" class="form-control" id="car_color" type="text" placeholder="Enter your car's color" value="{{$car_color}}">
                        @error('driver.car_type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="car_number">Car Number</label>
                        <input wire:model.lazy="driver.car_number" class="form-control" id="car_number" type="text" placeholder="Enter your car's number" value="{{$car_number}}">
                        @error('car_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="rating">Rating</label>
                        <input wire:model.lazy="driver.rating" class="form-control" id="rating" type="number" placeholder="Enter your rating" value="{{$rating}}">
                        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="driver.license_verification">License Verification</label>
                        <select wire:model.lazy="license_verification" class="form-select" id="license_verification">
                            <option value="0" {{ $license_verification == 0 ? 'selected' : '' }}>Pending</option>
                            <option value="1" {{ $license_verification == 1 ? 'selected' : '' }}>Verified</option>
                            <option value="2" {{ $license_verification == 2 ? 'selected' : '' }}>Rejected</option>
                        </select>
                        @error('license_verification') <span class="text-danger">{{ $message }}</span> @enderror    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">Lisence Verification</h2>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="card card-body border-0 shadow mb-3">
                                <h2 class="h5 mb-4">Select Passport Frontend photo</h2>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                    @if($passport_frontend)
                                        <img src="{{ asset('storage/' . $passport_frontend) }}" class="rounded avatar-xl" alt="Driver Photo">
                                    @else
                                        <img class="rounded avatar-xl" src="{{ asset('assets/img/lisence-front.png') }}" alt="change avatar">
                                    @endif
                                    </div>
                                    <div class="file-field">
                                        <div class="d-flex justify-content-xl-center ms-xl-3">
                                            <div class="d-flex">
                                                <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd">
                                                    </path>
                                                </svg>
                                                <input wire:model="passport_frontend" class="form-control" id="passport_frontend" type="file" accept="image/*">
                                                <div class="d-md-block text-left">
                                                    <div class="fw-normal text-dark mb-1">Choose Image</div>
                                                    <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-body border-0 shadow mb-3">
                                <h2 class="h5 mb-4">Select Passport Backend photo</h2>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                    @if($passport_backend)
                                        <img src="{{ asset('storage/' . $passport_backend) }}" class="rounded avatar-xl" alt="Driver Photo">
                                    @else
                                        <img class="rounded avatar-xl" src="{{ asset('assets/img/lisence-back.png') }}" alt="change avatar">
                                    @endif
                                    </div>
                                    <div class="file-field">
                                        <div class="d-flex justify-content-xl-center ms-xl-3">
                                            <div class="d-flex">
                                                <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd">
                                                    </path>
                                                </svg>
                                                <input wire:model="passport_backend" class="form-control" id="passport_backend" type="file" accept="image/*">
                                                <div class="d-md-block text-left">
                                                    <div class="fw-normal text-dark mb-1">Choose Image</div>
                                                    <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <svg class="icon icon-lg" fill="#E11D48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
                                    d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 8.7070312 7.2929688 L 7.2929688 8.7070312 L 10.585938 12 L 7.2929688 15.292969 L 8.7070312 16.707031 L 12 13.414062 L 15.292969 16.707031 L 16.707031 15.292969 L 13.414062 12 L 16.707031 8.7070312 L 15.292969 7.2929688 L 12 10.585938 L 8.7070312 7.2929688 z">
                                    </path> -->
                                </svg>
                                @if($license_verification == 0)
                                    <span class="pendding">Pendding</span>
                                @elseif($license_verification == 1)
                                    <span class="verified">Verified</span>
                                @else($license_verification == 1)
                                    <span class="unverified">Rejected</span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save All</button>
</form>
