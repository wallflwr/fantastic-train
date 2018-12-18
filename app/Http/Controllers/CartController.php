<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Session;

class CartController extends Controller
{
    public function itemDecrement(Request $r, $id) {
        
        if($id) {
            $order = Order::find($id);
            $order_id = $r->session()->get('orderid');
            if($order->quantity>1) {
                Order::find($id)->decrement('quantity');
                $count = Order::where('order_id',$order_id)->sum('quantity');
                $r->session()->put('cart',$count);
                $order = Order::where('order_id',$order_id)->get();
                Session::put('cartDetails',$order);
                return redirect()->route('cart.view');
            }else {
                $order->delete();
                $count = Order::where('order_id',$order_id)->sum('quantity');
                //$count = Order::sum('quantity');
                $r->session()->put('cart',$count);
                $order = Order::where('order_id',$order_id)->get();
                Session::put('cartDetails',$order);
                return redirect()->route('cart.view');
            }
        }
    }

    public function removeItem(Request $r, $id) {

        if($id){
            $order = Order::find($id);
            $order->delete();
            $order_id = $r->session()->get('orderid');
            $count = Order::where('order_id',$order_id)->sum('quantity');
            //$count = Order::sum('quantity');
            $r->session()->put('cart',$count);
            $order = Order::where('order_id',$order_id)->get();
            Session::put('cartDetails',$order);
            return redirect()->route('cart.view');
        }
    }
}


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
