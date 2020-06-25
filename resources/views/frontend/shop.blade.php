@extends('frontend.master')

@section('content')
<div class="container shopdiv">
  <div class="row">
    @foreach($items as $item)
    @php $photos = json_decode($item->photo) @endphp

      <div class="box col-md-3 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4">
          <div class="">
              <a href="{{route('shopdetail',$item->id)}}"><img src="{{asset($photos[0])}}" class="img-fluid" alt="..."></a>
          </div>
          <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">Price: {{$item->price}}</p>
              <div class="button_show"><a href="#" class="btn btn-dark ">Add to cart</a></div>
          </div>
      </div>
    @endforeach
  </div>
</div>
@endsection