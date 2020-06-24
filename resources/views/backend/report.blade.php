@extends('backend.template')
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Order Reports</h1>
          <p class="mb-4">Category is the main kind of all items. so, we must create categories before item created. Items can have sub kind of items called sub categories.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary d-inline-block">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Voucher No</th>
                      <th>Order Date</th>
                      <th>Total</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Voucher No</th>
                      <th>Order Date</th>
                      <th>Total</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
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