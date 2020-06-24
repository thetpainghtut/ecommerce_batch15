<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
  public function index($value='')
  {
    $items = Item::take(3)->get();
    return view('frontend.index',compact('items'));
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
