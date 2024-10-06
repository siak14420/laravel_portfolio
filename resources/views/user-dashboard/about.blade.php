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
    <form id="profileForm" method="POST" enctype="multipart/form-data">
        @csrf <!-- Automatically adds the CSRF token -->
        <input type="hidden" name="" id="aboutId" value="{{ $about->id }}" />
        <div class="card shadow border-0 mb-4">
            <!-- Profile Section Heading Inside the Card -->
            <div class="card-header text-start bg-light d-flex justify-content-between align-items-center">
                <h4 class="fw-bold mb-0">User Profile</h2>
                <i class="fa-solid fa-pen-to-square" id="editIcon" style="cursor: pointer;"></i>
            </div>

            <div class="row g-0">
                <!-- Profile Image -->
                <div class="col-lg-4 text-center py-4">
                <div class="profile-container">
                        <img src="{{ asset('storage/uploads/' . $about->image) }}" alt="avatar"
                        class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px;">
                    <!-- Hidden File Input for image upload -->
                        <input type="file" id="profileImageInput" class="form-control form-control editInput mb-2" name="image" style="display: none;">
                    </div>

                    <p class="text-muted mb-2" id="aboutDisplay">{{ $about->about ? $about->about : '--' }}</p>
                    <textarea class="form-control form-control-sm editInput mt-2 mb-2" id="aboutInput" name="about" rows="2"style="display: none;">{{ $about->about ? $about->about : '' }}</textarea>
                    <!-- Social Icons -->
                    <div class="mt-2">
                        @if($about->xId)
                        <a href="https://facebook.com" class="text-decoration-none me-3" target="_blank">
                        <i class="fa-brands fa-x-twitter fa-lg text-dark custom-tooltip" data-tooltip="{{ $about->xId }}"></i>
                        </a>
                        @endif
                        <input type="text" id="xInput" class="form-control form-control-sm editInput mt-2 mb-2" name="xId" value="{{$about->xId ? $about->xId : '' }}" placeholder="XId" style="display: none;">
                        @if($about->facebookId)
                        <a href="https://facebook.com" class="text-decoration-none me-3" target="_blank">
                        <i class="fa fa-facebook fa-lg text-info custom-tooltip" data-tooltip="{{ $about->facebookId }}"></i>
                        </a>
                        @endif
                        <input type="text" id="facebookInput" class="form-control form-control-sm editInput mt-2 mb-2" name="facebookId" value="{{$about->facebookId ? $about->facebookId : '' }}" placeholder="FacebookId" style="display: none;">
                        @if($about->instagramId)
                        <a href="https://facebook.com" class="text-decoration-none me-3" target="_blank">
                            <i class="fa fa-instagram fa-lg text-purple custom-tooltip" data-tooltip="{{ $about->instagramId }}"></i>
                        </a>
                        @endif
                        <input type="text" id="instagramInput" class="form-control form-control-sm editInput mt-2 mb-2" name="instagramId" value="{{$about->instagramId ? $about->instagramId : '' }}" placeholder="InstagramId" style="display: none;">
                        @if($about->githubId)
                        <a href="https://github.com" class="text-decoration-none" target="_blank">
                            <i class="fa fa-github fa-lg text-dark custom-tooltip" data-tooltip="{{ $about->githubId }}"></i>
                        </a>
                        @endif
                        <input type="text" id="githubInput" class="form-control form-control-sm editInput mt-2 mb-2" name="githubId" value="{{$about->githubId ? $about->githubId : '' }}" placeholder="GithubId" style="display: none;">
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
                                <p class="text-muted mb-0" id="userNameSideDisplay">{{ $user->name ? $user->name : "--" }}</p>
                                <input type="text" class="form-control form-control-sm editInputborder" id="userNameSideInput" name="name" value="{{ $user->name ? $user->name : '' }}" style="display: none;">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Profile</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0" id="profileDisplay">{{ $about->profile ? $about->profile : "--" }}</p>
                                <input type="text" id="profileInput" class="form-control form-control-sm editInputborder" name="profile" value="{{ $about->profile ? $about->profile : '' }}" style="display: none;">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0" id="emailDisplay">{{ $user->email ? $user->email : "--" }}</p>
                                <input type="text" id="emailInput" class="form-control form-control-sm editInputborder" name="email" value="{{ $user->email ? $user->email : '' }}" style="display: none;">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0" id="phoneDisplay">{{ $about->phone ? $about->phone : "--" }}</p>
                                <input type="text" id="phoneInput" class="form-control form-control-sm editInputborder" name="phone" value="{{ $about->phone ? $about->phone : '' }}" style="display: none;">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Address</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted" id="addressDisplay">{{ $about->address ? $about->address : "--" }}</p>
                            <textarea type="text" id="addressInput" class="form-control form-control-sm editInputborder" name="address" style="display: none;">{{ $about->address ? $about->address : "--" }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary m-auto w-auto mb-2 me-2" id="updateButton"  style="display: none;">Update</button>
        </div>
    </form>
</section>
@endforeach
@endsection
<!-- main panel ends-->          
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="{{ asset('user-dashboard/js/about.js') }}"></script>
