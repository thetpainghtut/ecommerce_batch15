@extends('backend.template')
@section('style')
  
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Create Subcategory</h1>
          <p class="mb-4">Category table have name and photo columns.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Create Form</h6>
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
              <form method="post" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Category Name...">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPhoto" class="col-sm-2 col-form-label">Main Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="main_category">
                      <optgroup label="Choose Main Category">
                        @foreach($categories as $row)
                          <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
@endsection

@section('script')
  
@endsection