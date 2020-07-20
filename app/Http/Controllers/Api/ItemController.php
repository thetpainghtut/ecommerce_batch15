<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id','desc')->get();
        // return $items;

        return ItemResource::collection($items);
        
        // return response()->json([
        //     'items' => $items,
        // ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'codeno' => 'required|max:191',
            // 'main_category' => 'required',
            'sub_category' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'photo.*' => 'required|mimes:jpeg,bmp,png'
        ]);

        $data=array();
        if($request->hasfile('photo'))
        {   
            $i=1;
            foreach($request->file('photo') as $file)
            {
                $name = time().$i.'.'.$file->extension();
                $file->move(public_path('images/items'), $name);  
                $data[] = 'images/items/'.$name;
                $i++;
            }
        }

        $item = new Item;
        $item->name = $request->name;
        $item->codeno = $request->codeno;
        $item->subcategory_id = $request->sub_category;
        $item->brand_id = $request->brand;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->photo = json_encode($data);

        $item->save();

        return new ItemResource($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return new ItemResource($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
