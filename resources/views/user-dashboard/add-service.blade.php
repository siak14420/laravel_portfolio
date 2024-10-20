@extends('user-dashboard.layouts.app')

<!-- main panel -->
@section('content')  
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Basic form elements</h4>
      <p class="card-description">
        Basic form elements
      </p>
      <form class="forms-sample" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleInputName1">Profile</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputName1" name="profile" placeholder="Profile">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail3">Phone</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputEmail3" name="phone" placeholder="Phone">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
              <label for="file-upload">File Upload</label>
              <input type="file" id="file-upload" name="image" class="form-control form-control-lg">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail3">Twitter</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputEmail3" name="twitterId" placeholder="Twitter Id">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleTextarea1">About</label>
            <textarea class="form-control form-control-lg" id="exampleTextarea1" name="about" rows="4"></textarea>
          </div>
          <div class="form-group col-6">
            <label for="exampleTextarea1">Address</label>
            <textarea class="form-control form-control-lg" id="exampleTextarea1" name="address" rows="4"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleInputEmail3">Facebook</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputEmail3" name="facebookId" placeholder="Facebook Id">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail3">Instagram</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputEmail3" name="instagramId" placeholder="Instagram Id">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleInputEmail3">LinkedIn</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputEmail3" name="linkedInId" placeholder="Linked In">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail3">Github</label>
            <input type="text" class="form-control form-control-lg" id="exampleInputEmail3" name="githubId" placeholder="Github Id">
          </div>
        </div>
        <div class="text-end">
          <button class="btn btn-light">Cancel</button>
          <button type="submit" class="btn btn-primary me-2 float">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>  
@endsection
<!-- main panel ends -->