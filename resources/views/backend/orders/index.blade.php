@extends('backend.template')
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
  <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Orders</h1>
          

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
                      <th>Customer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Voucher No</th>
                      <th>Order Date</th>
                      <th>Total</th>
                      <th>Customer</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp

                    @foreach($orders as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$row->voucherno}}</td>
                      <td>{{$row->orderdate}}</td>
                      <td>{{$row->total}}</td>
                      <td>{{$row->user->name}}</td>
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