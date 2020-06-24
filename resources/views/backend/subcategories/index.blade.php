@extends('backend.template')
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Subcategories</h1>
          <p class="mb-4">Category is the main kind of all items. so, we must create categories before item created. Items can have sub kind of items called sub categories.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary d-inline-block">DataTables Example</h6>
              <a href="{{route('subcategories.create')}}" class="btn btn-primary float-right">Add New</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp
                    
                    @foreach($subcategories as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>
                        {{$row->name}}
                      </td>
                      <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection

@section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('backendtemplate/js/demo/datatables-demo.js') }}"></script>
@endsection