@extends('backend.template')
@section('style')
  
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Create Item</h1>
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
              <form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Item Name...">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputCodeno" class="col-sm-2 col-form-label">Codeno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCodeno" name="codeno" placeholder="Item Codeno...">
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
                          <option value="{{$row->id}}">{{$row->name}}</option>
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
                          <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                      </optgroup>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="inputPhoto" name="photo[]" accept="image/*" multiple>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPrice" name="price" placeholder="Item Perprice...">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputDiscount" class="col-sm-2 col-form-label">Discount</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputDiscount" name="discount" placeholder="Item Discount..." value="0">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputDescription" name="description" placeholder="Description..."></textarea>
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