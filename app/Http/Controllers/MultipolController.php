<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipolController extends Controller
{

	public function index( ){
			 return view('multipol.index');

	}

	public function create( ){

    	 return view('multipol.create');
	}

	public function store( ){

    	
	}


}