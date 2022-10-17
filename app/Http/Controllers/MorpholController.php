<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MorpholController extends Controller
{

	public function index( ){
			 return view('morphol.index');

	}

	public function create( ){

    	 return view('morphol.create');
	}

	public function store( ){

    	
	}


}