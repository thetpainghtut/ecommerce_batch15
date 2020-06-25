<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce Design</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="text/css" href="{{ asset('frontendals/images/download.png')}}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('frontendals/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontendals/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontendals/bootstrap/css/style.css')}}">
    <script type="text/javascript" src="{{ asset('frontendals/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontendals/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>


<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">

    <div class="container">
    <div class="d-flex flex-grow-1">
        
        <a href="{{route('main')}}" class="navbar-brand"><img src="{{asset('frontendals/images/shop.png')}}" height="50"></a>
        <form class="mr-2 my-auto w-75 d-inline-block search-form order-lg-1 order-md-1 order-sm-2" action="brandshop.html">
         

           <input class="search-text" name="keyword" type="text" id="search-keyword" placeholder="Enter Shop" monkey="1">
           <button class="search-button" type="submit"><span><i class="fa fa-search"></i></span></button>
        </form>

    </div>
    
    <button class="navbar-toggler order-0" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse flex-shrink-1 flex-grow-0 order-last" id="navbar7">
        
                <a href="{{route('cart')}}"><i class="fas fa-shopping-cart fa-2x order-lg-2 order-md-2 order-sm-1"></i></a>
          
        
        <a class="nav-link" href="#"><img src="{{asset('frontendals/images/app.png')}}" height="50"></a>
           
    </div>
    </div>
</nav>

  @yield('content')

  <div class="container-fluid bg-dark p-5 mt-5">
  <div class="row mb-3">
    <div class="offset-md-4 col-md-4">
      <h3 class="text-white">Subscribe Here:</h3>
    </div>

  </div>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="row">
        <div class="col-md-8">
          <input type="text" class="form-control" placeholder="Email.....">
        </div>
        <div class="col-md-4">
          <a href="#" class="btn btn-danger text-white form-control">Subcribe</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row bg-dark p-3">
    <div class="offset-md-4 col-md-4 text-center">
      <h4 class="text-white">All right reserved by: </h4>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{asset('frontendals/js/custom.js')}}"></script>
</body>
</html>
