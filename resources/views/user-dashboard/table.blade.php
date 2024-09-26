@extends('user-dashboard.layouts.app')

<!-- main panel -->
@section('content')
<!-- <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description">
                Add class <code>.table-striped</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                            User
                            </th>
                            <th>
                            Name
                            </th>
                            <th>
                            Email
                            </th>
                            <th>
                            Profile
                            </th>
                            <th>
                            About
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($aboutInfo as $about)
                            <tr>
                                <td class="py-1">
                                <img src="{{ asset('storage/uploads/' . $about->image) }}" alt="image"/>
                                </td>
                                <td>
                                {{$about->userId}}
                                </td>
                                <td>
                                email
                                </td>
                                <td>
                            {{$about->profile}}
                                </td>
                                <td>
                                {{$about->about}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

@foreach($aboutInfo as $about)
<section class="container mt-4">
    <div class="card shadow border-0 mb-4">
        <!-- Profile Section Heading Inside the Card -->
        <div class="card-header text-start bg-light">
            <h4 class="fw-bold mb-0">User Profile</h2>
        </div>

        <div class="row g-0">
            <!-- Profile Image -->
            <div class="col-lg-4 text-center py-4">
                <img src="{{ asset('storage/uploads/' . $about->image) }}" alt="avatar"
                class="rounded-circle img-fluid mb-3" style="width: 150px; height: 140px;">
                <h5 class="card-title mb-2">{{ $about->userId }}</h5>
                <p class="text-muted mb-1">{{ $about->profile }}</p>
                <p class="text-muted">{{ $about->address }}</p>

                <!-- Social Icons -->
                <div class="mt-3">
                    <a href="https://facebook.com" class="text-decoration-none me-3" target="_blank">
                    <i class="fa fa-facebook fa-2x text-primary"></i>
                    </a>
                    <a href="https://facebook.com" class="text-decoration-none me-3" target="_blank">
                    <i class="fa fa-facebook fa-2x text-primary"></i>
                    </a>
                    <a href="https://facebook.com" class="text-decoration-none me-3" target="_blank">
                    <i class="fa fa-facebook fa-2x text-primary"></i>
                    </a>
                    <a href="https://github.com" class="text-decoration-none" target="_blank">
                        <i class="fa fa-github fa-2x text-dark"></i>
                    </a>
                </div>
            </div>
            <!-- Profile Details -->
            <div class="col-lg-8">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0 fw-bold">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $about->userId }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0 fw-bold">Profile</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $about->profile ? $about->profile : "--" }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0 fw-bold">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">example@example.com</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0 fw-bold">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $about->phone ? $about->phone : "--" }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <p class="mb-0 fw-bold">About</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $about->about ? $about->about : '--' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection
<!-- main panel ends-->          