@extends('backend.template')
@section('style')
  
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Category</h1>
          <p class="mb-4">Category table have name and photo columns.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Form</h6>
            </div>
            <div class="card-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Category Name..." required="required" value="{{$category->name}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-10">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a href="#old" class="nav-link active" data-toggle="tab">Old</a>
  </li>

  <li class="nav-item">
    <a href="#new" class="nav-link" data-toggle="tab">New</a>
  </li>
</ul>

<div class="tab-content my-2">
  <div class="tab-pane fade show active" id="old">
    <img src="{{asset($category->photo)}}" class="img-fluid w-25">
    <input type="hidden" name="oldphoto" value="{{$category->photo}}">
  </div>

  <div class="tab-pane" id="new">
    <input type="file" class="form-control-file" id="inputPhoto" name="photo" accept="image/*">
  </div>
</div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
@endsection

@section('script')
  
@endsection