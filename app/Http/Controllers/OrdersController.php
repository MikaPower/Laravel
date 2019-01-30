<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
 $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * $this have no ideia
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //SE FOR ADMIN

        if(Auth()->user()->hasRole('admin')){
            $orders=Order::paginate(2);
            return view('orders.index', ['orders' => $orders]);
        }
//Se for user normal
     $orders=Order::where('user_id',auth()->id())->paginate(2);

        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

//Substituido pelo UserordersController
      /*  $attributes= request()->validate(['title'=>'required','order'=>'required']);
        Order::create($attributes);
        return redirect('/orders');*/
    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)

    {

        $this->authorize('view', $order);

//aborda casso utilizador nao seja dono da order
    //  abort_if( $order->user_id!== auth()->id(),403);            USES POLICY
        return view('orders.show',compact('order'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $this->authorize('view', $order);
        return view('orders.edit',compact('order'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Order $order)
    {
        $this->authorize('view', $order);
        $order->update(request(['order','title']));
        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $this->authorize('view', $order);
        $order->delete();
        return redirect('/orders');
    }
}
