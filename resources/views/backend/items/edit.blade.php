@extends('backend.template')
@section('style')
  
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Item</h1>
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
              <form method="post" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Item Name..." value="{{$item->name}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputCodeno" class="col-sm-2 col-form-label">Codeno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCodeno" name="codeno" placeholder="Item Codeno..." value="{{$item->codeno}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputMainCategory" class="col-sm-2 col-form-label">Main Category</label>
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
                  <label for="inputSubCategory" class="col-sm-2 col-form-label">Sub Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="sub_category">
                      <optgroup label="Choose Sub Category">
                        @foreach($subcategories as $row)
                          <option value="{{$row->id}}" 
                            @if($item->subcategory_id == $row->id) {{'selected'}} @endif
                            >{{$row->name}}</option>
                        @endforeach
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPhoto" class="col-sm-2 col-form-label">Brand</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="brand">
                      <optgroup label="Choose Brand">
                        @foreach($brands as $row)
                          <option value="{{$row->id}}" 
                            @if($item->brand_id == $row->id) {{'selected'}} @endif
                            >{{$row->name}}</option>
                        @endforeach
                      </optgroup>
                    </select>
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
    @foreach(json_decode($item->photo) as $photo)
    <img src="{{asset($photo)}}" class="img-fluid w-25">
    @endforeach
    <input type="hidden" name="oldphoto" value="{{$item->photo}}">
  </div>

  <div class="tab-pane" id="new">
    <input type="file" class="form-control-file" id="inputPhoto" name="photo[]" accept="image/*" multiple>
  </div>
</div>

                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPrice" name="price" placeholder="Item Perprice..." value="{{$item->price}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputDiscount" class="col-sm-2 col-form-label">Discount</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputDiscount" name="discount" placeholder="Item Discount..." value="{{$item->discount}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputDescription" name="description" placeholder="Description...">{{$item->description}}</textarea>
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