<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmicController extends Controller
{

	public function index( ){
			 return view('smic.index');

	}

	public function create( ){

    	 return view('smic.create');
	}

	public function store( ){

    	
	}


}