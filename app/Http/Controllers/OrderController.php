<?php

namespace App\Http\Controllers;

use App\Models\OrderHasProduct;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Commande - Bookdev';
        $description = 'Vos commandes Bookdev';
        $orders = Auth::user()->orders;
        return view('orders.index')
            ->with('orders', $orders)
            ->with('title', $title)
            ->with('description', $description);

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
        //Récupérer la variable de session
        $cart = $request->session()->get('cart');
        $order = new Order();
        $order->number = random_int(1, 1000000);
        $order->order_create = time();
        $order->order_delivery = time();
        $order->user_id = Auth::user()->id;
        $order->save();
        foreach ($cart as $id => $qty)
        {
            $orderHasProduct = new OrderHasProduct();
            $orderHasProduct->order_id = $order->id;
            $orderHasProduct->product_id = $id;
            $orderHasProduct->quantity = $qty;
            $orderHasProduct->save();
        }
        $request->session()->forget('cart');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show')
            ->with('order', $order);
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
