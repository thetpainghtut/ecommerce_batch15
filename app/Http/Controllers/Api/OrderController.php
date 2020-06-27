<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->data);

        $loStr = json_decode($request->data);
        $total = 0;

        foreach ($loStr as $row) {
            $total+=$row->price*$row->qty;
        }

        $order = new Order;
        $order->orderdate = date('Y-m-d');
        $order->voucherno = uniqid();
        $order->total = $total;
        $order->note = $request->note;
        $order->status = 0;
        $order->user_id = 1;
        $order->save();

        foreach ($loStr as $value) {
            $order->items()->attach($value->id,['qty'=>$value->qty]);
        }

        return response()->json([
            'status' => 'Order Successfully created!'
        ]);
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
