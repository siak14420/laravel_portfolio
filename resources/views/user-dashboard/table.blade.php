@extends('user-dashboard.layouts.app')

<!-- main panel -->
@section('content')
<div class="row">
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
</div>

<section style="">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ asset('user-dashboard/images/faces/face1.jpg') }}" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-2">John Smith</h5>
                    <p class="text-muted mb-1">Full Stack Developer</p>
                    <p class="text-muted ">Bay Area, San Francisco, CA</p>
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
                    <p class="text-muted mb-0">Johnatan Smith</p>
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
                    <p class="text-muted mb-0">(097) 234-5678</p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                </div>
                </div>
            </div>
            </div>
        </div>
  </div>
</section>
@endsection
<!-- main panel ends-->          