<?php
 
namespace App\Http\Controllers;
use App\Pedido;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index( ){
		
    	$xped= Pedido::all();
        foreach ($xped as $x) {
        $x1= $x->idpedido;
        $fecha = Carbon::parse($x->fecha);
        $afecha = $fecha->year;
        }
		 
		return view('compras.index', compact('x1'));

	} 

	public function static buscarano($id){
    
    return ($num);
}

	public function create( ){


 		
    	 return view('micmac.create');
	}

	public function store( ){

    	
	}

	 public function show($proyecto)
    {
        
    }

	
}
