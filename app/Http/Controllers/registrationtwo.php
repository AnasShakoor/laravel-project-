<?php

namespace App\Http\Controllers;
use App\Http\Requests\validate;

use Illuminate\Http\Request;
use App\Models\Forms2;
use FFI;

class registrationtwo extends Controller
{
    public function index(){
        return view('forms2');
    }
    public function store(validate $request){
      $customers = new Forms2();
      $customers->name = $request['name'];        
      $customers->email = $request['email'];        
      $customers->password = $request['password'];
      $customers->save();  
      return redirect()->back();    
  
    }
 
}
