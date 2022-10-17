<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class CartController extends Controller
{
    
    public function __construct(){
        if(!\Session::has('cart'))
            \Session::put('cart',array());
    }
    

    public function show()
    {   
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart',compact('cart','total'));
    }

    public function add(Servicio $servicio)
    {
        $cart = \Session::get('cart');
        $servicio->cantidad = 1;
        $cart[$servicio->slug] = $servicio;
         \Session::put('cart',$cart);

        return redirect()->route('cart-show');
    }

    public function delete(Servicio $servicio)
    {
        $cart = \Session::get('cart');
        unset($cart[$servicio->slug]);
         \Session::put('cart',$cart);
         return redirect()->route('cart-show');
    }

    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }

    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precio * $item->cantidad;
        }
        return $total;
    }

    public function detallePedido(){

        if(count(\Session::get('cart'))<=0) return redirect()->route('inicio');
        $cart = \Session::get('cart');
        $total = $this->total();
        
        return view('store.detalle-pedido',compact('cart','total'));
    }
}