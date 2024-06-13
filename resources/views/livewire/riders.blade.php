<title>Rider management</title>
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
                <li class="breadcrumb-item active" aria-current="page">Rider List</li>
            </ol>
        </nav>
        <h2 class="h4">Rider List</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        
    </div>
</div>
<div class="card card-body shadow border-0 table-wrapper table-responsive">
    <table class="table table-flush" id="datatable">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>+1 39281802819</td>
                <td>startcoding@gmail.com</td>
                <td>
                    <span class="text-capitalize badge bg-info p-sm-2">active</span>
                </td>
                <td>
                    <div class="d-flex aligh-items-center">
                        <span class="me-md-1 rider-edit-btn" data-id="1">
                            <i class="fas fa-edit text-info"></i>
                        </span>
                        <span class="me-md-1 rider-del-btn" data-id="1">
                            <i class="fas fa-trash text-danger"></i>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nixon</td>
                <td>+1 3281802819</td>
                <td>startcoding@gmail.com</td>
                <td>
                    <span class="text-capitalize badge bg-info p-sm-2">active</span>
                </td>
                <td>
                    <div class="d-flex aligh-items-center">
                        <span class="me-md-1 rider-edit-btn" data-id="1">
                            <i class="fas fa-edit text-info"></i>
                        </span>
                        <span class="me-md-1 rider-del-btn" data-id="1">
                            <i class="fas fa-trash text-danger"></i>
                        </span>
                    </div>
                </td>
            </tr>            
            <tr>
                <td>Tiger</td>
                <td>+1 19281802819</td>
                <td>startcoding@gmail.com</td>
                <td>
                    
                </td>
                <td>
                    <div class="d-flex aligh-items-center">
                        <span class="me-md-1 rider-edit-btn" data-id="1">
                            <i class="fas fa-edit text-info"></i>
                        </span>
                        <span class="me-md-1 rider-del-btn" data-id="1">
                            <i class="fas fa-trash text-danger"></i>
                        </span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal-rider-edit" tabindex="-1" role="dialog" aria-labelledby="modal-rider-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Rider Edit </h1>
                    </div>
                    <form action="#" class="mt-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/js/riders.js"></script>