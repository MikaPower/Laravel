<?php

namespace App\Http\Controllers;

use App\Parcel;
use Illuminate\Http\Request;
use App\User;
use  App\Order;

use Illuminate\Support\Facades\Input;

class OrderParcelsController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  return view (parcels.create);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //falta validation
    public function store(Order $order, Request $request)
    {
        $i=0;
     while($i<count($request->quantity)){
         $order->addParcel($request->quantity[$i], $request->description[$i]);
         $i++;
     }

     return redirect('orders');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Order $order,Parcel $parcel)
    {
       // $parcel->update(['state_id'=> request()->has('state_id')]);
        request()->validate(['state_id'=>'required']);
        $parcel->update(request(['state_id']));
        return back();
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
