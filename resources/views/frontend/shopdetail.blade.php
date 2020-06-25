@extends('frontend.master')

@section('content')
@php $photos = json_decode($item->photo) @endphp

<div class="container detailstart">
  <div class="pdp-block__main-information">
    <div class="row">
          <div class="col-md-6 pt-5 pl-5 col-sm-12 pt-sm-5">
            <img src="{{asset($photos[0])}}" class="shadow-lg p-3 mb-5 bg-white rounded detailimg">
          </div>
          <div class="col-md-6 pl-1 col-sm-12">
            <h5 class="pt-5">{{$item->description}}</h5>
              
            <i class="far fa-star staricon"></i>
            <i class="far fa-star staricon"></i>
            <i class="far fa-star staricon"></i>
            <i class="far fa-star staricon"></i>
            <i class="far fa-star staricon"></i>
            
            <p class="pt-5 pt-sm-5">Brand: Spike</p>
            <hr class="shophr">

            <p class="price">Ks {{$item->price}}</p>
          <div>
          <p class="d-inline-block mr-5" >Quantity:</p> 
          <button class="shopicon"> <i class="fas fa-plus qtyicon"></i></button>
          <input type="number" class="shopqty text-center" name="quantity" value="1">
          <button class="shopicon"><i class="fas fa-minus qtyicon"></i></button>
        </div>
        <div class="pt-4 pt-sm-4">
          <button type="button" class="buynowbtn d-inline-block">Buy Now</button>
          <button type="button" class="addtocartbtn">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection