@extends('layouts.layout')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit profile</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">No telepon</label>
              <input type="text" class="form-control" id="exampleInputName1" placeholder="Nomor telepon">
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">NIK</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="NIK SESUAI KTPEH">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection