@extends('frontend.master')

@section('content')
<div class="container shopdiv">
  <div class="row">
    @foreach($items as $item)
    @php $photos = json_decode($item->photo) @endphp

      <div class="box col-md-3 m-md-4 col-sm-5 m-sm-3 col-lg-2 mx-lg-3  my-sm-3 my-md-2 my-lg-2 my-4 px-0">
          <div class="">
              <a href="{{route('shopdetail',$item->id)}}"><img src="{{asset($photos[0])}}" class="img-fluid" alt="..."></a>
          </div>
          <div class="card-body">
              <h6 class="card-title">{{$item->name}}</h6>
              <p class="card-text">Price: <strong>{{$item->price}}</strong> Ks</p>
              <div class="button_show"><a href="#" class="btn btn-dark addToCart" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$photos[0]}}" data-price="{{$item->price}}">Add to cart</a></div>
          </div>
      </div>
    @endforeach
  </div>
</div>
@endsection