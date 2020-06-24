@extends('frontend.template')

@section('content')

<div class="card my-2 bg-white" style="border-radius: 0px;">
  <div class="row no-gutters">

    <div class="col-lg-3">
      <div class="card-body">
        <strong>Categories</strong>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>
      </div>
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
      <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  

  <div class="row item-list">
    @foreach($items as $row)
    <div class="col-lg-4 col-md-6 mb-4 item-box">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">{{$row->name}}</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  @if(count($items)>0)
  <p class="text-center mt-4 mb-5"><button class="load-more btn btn-dark" data-totalResult="{{ App\Item::count() }}">Load More</button></p>
  @endif
  <!-- /.row -->

@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){

          if($(window).scrollTop() == $(document).height() - $(window).height()) {
            var _totalCurrentResult=$(".item-box").length;
            // Ajax Reuqest
            $.ajax({
                url:"{{route('loadmore')}}",
                type:'get',
                dataType:'json',
                data:{
                    skip:_totalCurrentResult
                },
                beforeSend:function(){
                    $(".load-more").html('Loading...');
                },
                success:function(response){
                    var _html='';
                    $.each(response,function(index,value){
                        _html+=`<div class="col-lg-4 col-md-6 mb-4 item-box">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">${value.name}</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>`;
                    });
                    $(".item-list").append(_html);
                    // Change Load More When No Further result
                    var _totalCurrentResult=$(".item-box").length;
                    var _totalResult=parseInt($(".load-more").attr('data-totalResult'));
                    console.log(_totalCurrentResult);
                    console.log(_totalResult);
                    if(_totalCurrentResult==_totalResult){
                        $(".load-more").remove();
                    }else{
                        $(".load-more").html('Load More');
                    }
                }
            });
          }
        });
    });
</script>
@endsection