<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycustomer extends Controller
{
    public function index(){
        return view('mycustomer');
    } 


     public function submit(Request $request){
$request->validate(
    [
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
    ]
    );
     }
}
