<?php

namespace App\Http\Controllers;

use App\micmac;

use Illuminate\Http\Request;
use Redirect;
class MicmacController extends Controller
{

	
	public function index( ){
		$proy = micmac::orderBy('proyecto', 'asc')->get();
		$proyx = micmac::orderBy('id', 'asc')->first();
		$x='null';

		 
		return view('micmac.index',compact('proy', 'x'));

	} 

	public function create( $proyecto){


 		$variable = micmacs::where('proyecto', $proyecto)->get();
    	 return view('micmac.create');
	}

	public function store( ){

    	
	}

	 public function show($proyecto)
    {
        $variable = micmac::where('proyecto', $proyecto)->get();
        $var3=0;
        $var2=0;
        $max=0;
        $prueba='hola';
        $numero=1;

        

    return view('micmac.create', compact( 'variable', 'numero', 'var3', 'var2', 'max', 'prueba' ));
    }

	public function prueba()
	    {

	     
		}
   
}
