<?php

namespace App\Http\Controllers;
use App\pedido;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
            $xped= Pedido::all();
            $x1=0;
            foreach ($xped as $x ) {
            $x1= $x->idpedido;
            }
            $users= User::all();
            foreach ($users as $x ) {
            $us= $x->id;
        }
            
            if(\Auth::user()->type == 'admin'){
            return view('admin.home',compact('x1', 'us'));
        }
        else{
            return view('welcome');
        }
              
        
        
    }
}