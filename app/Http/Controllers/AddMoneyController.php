<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
use App\Http\Controllers\Cartalyst\Stripe\Exception;

class AddMoneyController extends Controller
{
   
    public function payWithStripe()
    {
        $total = $this->total();
        return view('store.paywithstripe',compact('total'));
    }

    public function postPaymentWithStripe(Request $request)
    {
        
        
        try{
             $stripe = Stripe::make('sk_test_yuBl3tOJunhuk2Zywt7FXGHg');
             $charge = $stripe->charges()->create([
                 'amount' => $this->total(),
                 'source' => $request->input('stripeToken'),
                 'currency' => 'USD',
                 'receipt_email' => $request->get('email'),
                 

             ]); 
          
             return \Redirect::route('inicio')->with('message','Compra realizada con exito');
        }catch(Exception $e){
             return back()->withErrors('Error! '. $e->getMessage());
        }
    }

    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precio * $item->cantidad;
        }
        return $total;
    }
}

