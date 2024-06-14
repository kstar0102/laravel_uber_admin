<div>
    <title>Ride management</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Ride Reqeust List</li>
                </ol>
            </nav>
            <h2 class="h4">Ride Request List</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <a href="/riderequest/create" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                New Booking
            </a> --}}
        </div>
    </div>
    <div class="card card-body shadow border-0 table-wrapper table-responsive">
        <table class="table table-flush" id="datatable">
            <thead class="thead-light">
                <tr>
                    <th>Rider</th>
                    <th>Driver</th>
                    <th>Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $item)
                    <tr>
                        <td>{{ $item->driver_name }}</td>
                        <td>{{ $item->rider_name }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>
                            @if($item->status == 0)
                                <span class="text-capitalize badge bg-info p-sm-2">New Requested</span>
                            @elseif($item->status == 1)
                                <span class="text-capitalize badge bg-success p-sm-2">Completed</span>
                            @else
                                <span class="text-capitalize badge bg-danger p-sm-2">Cancelled</span>
                            @endif
                            
                        </td>
                        <td>
                            <div class="d-flex aligh-items-center">
                                <a href="/riderequest/{{ $item->id }}" class="me-md-1">
                                    <i class="fas fa-eye text-info"></i>
                                </a>
                                <a href="javascript: remove_request({{ $item->id }});" class="me-md-1">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-gray'
        },
        buttonsStyling: false
    });
    
    function remove_request(id) {
        swalWithBootstrapButtons.fire({
            title: 'Are you sure you want to delete?',
            showCancelButton: true,
            confirmButtonClass: "btn-danger me-2",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((res) => {
            if(res.isConfirmed) {
                @this.call('remove', id);
            }
        });
    }
</script>