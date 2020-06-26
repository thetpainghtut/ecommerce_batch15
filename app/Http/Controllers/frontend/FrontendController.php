<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Category;

class FrontendController extends Controller
{
  public function index($value='')
  {
    $categories = Category::take(5)->get();

    $discountItems = Item::where('discount','>',0)
                      ->take(4)
                      ->get();

    $recommendItems = Item::where('discount',0)
                            ->take(5)
                            ->get();

    return view('frontend.index',compact('categories','discountItems','recommendItems'));
  }

  public function shop($id)
  {
    if ($id == 0) {
      $items = Item::where('discount',0)->get();
    }else{
      $items = Item::where('subcategory_id',$id)->get();
    }

    return view('frontend.shop',compact('items'));
  }

  public function shopdetail($id)
  {
    $item = Item::find($id);
    return view('frontend.shopdetail',compact('item'));
  }

  public function cart($value='')
  {
    return view('frontend.cart');
  }

  function more_data(Request $request){
    if($request->ajax()){
        $skip=$request->skip;
        $take=6;
        $items=Item::skip($skip)->take($take)->get();
        return response()->json($items);
    }else{
        return response()->json('Direct Access Not Allowed!!');
    }
  }
}
