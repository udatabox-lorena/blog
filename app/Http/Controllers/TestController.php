<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Articulo;

class TestController extends Controller
{
    public function view($id){
    	$articulo = Articulo::find($id);
    			$articulo->categoria;
    			$articulo->user;
    			$articulo->tags;
    			return view('test.index', ['prueba' => $articulo]);
    }
}
