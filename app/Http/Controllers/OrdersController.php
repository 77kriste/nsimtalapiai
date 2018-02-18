<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Order;

class OrdersController extends Controller
{
    public function index(){
  $orders = Order::all();
  $count = $orders->count();
  $orders = DB::table('orders')->paginate(10);
  $search = \Request::get('search');
  $orders = Order::where('name','like','%'.$search.'%')
       ->orderBy('name')
       ->paginate(10);
  return view('orders.index', compact('orders', 'count'), ['orders' => $orders]);
  }


    public function create(){
    return view('orders.form');
  }

  public function store(Request $request){
      $order = new Order;
      $order->name = $request->name;
      $order->email = $request->email;
      $order->telnumber = $request->telnumber;
      $order->stuffing = $request->stuffing;
      $order->quantity = $request->quantity;
      $order->deldate = $request->deldate;
      $order->delivery = $request->delivery;
      $order->total = $request->total;
      $order->save();

      return redirect()->route('orders');

}
  }
