<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;
use App\Brand;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();

        return view('backend.items.create',compact('categories','subcategories','brands'));
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
            'main_category' => 'required',
            'sub_category' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'photo.*' => 'required|mimes:jpeg,bmp,png'
        ]);

        if($request->hasfile('photo'))
        {
            foreach($request->file('photo') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path('images/items'), $name);  
                $data[] = 'images/items/'.$name;
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

        return redirect()->route('items.index')->with('success', 'An item have been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        return view('backend.items.edit',compact('item','categories','subcategories','brands'));
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
