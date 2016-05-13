<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class UsersController extends Controller
{
    public function create(){

        //dd('Hola esto es un mensaje');
        return view('admin.users.create');
    }

    public function store(Request $request){
    	
        dd($request->all());
        $user = new User($request->all());


    }

    public function show($id){
    	
    }

    public function edit($id){
    	
    }

    public function update(Request $request, $id){
    	
    }
}
