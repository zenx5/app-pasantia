<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class StoreController extends Controller
{
    public function index(){
        $servicios = Servicio::all();
        return view('store.index',compact('servicios'));
    }
}
