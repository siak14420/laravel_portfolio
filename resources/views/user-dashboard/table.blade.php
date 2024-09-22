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
<section style="">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/uploads/' . $about->image) }}" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-2">{{ $about->userId }}</h5>
                    <p class="text-muted mb-1">{{ $about->profile }}</p>
                    <p class="text-muted ">{{ $about->address }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $about->userId }}</p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Profile</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $about->profile }}</p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">example@example.com</p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $about->phone }}</p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">About</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $about->about }}</p>
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