<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function register (){
    return view(('page.register'));
   }

   public function store(Request $request){
      $name = $request['name'];
      $Name = $request['Name'];
     
  
      return view('page.welcome' , ['name' => $name, 'Name' => $Name ]);
     }
}
