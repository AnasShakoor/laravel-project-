<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Customer;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Http\Requests\validate;

use Symfony\Contracts\Service\Attribute\Required;
use App\Modals\creative;
use App\Models\Form;
use App\Models\Login;

class registration extends Controller
{
    //
    public function index()
    {
        $url = url('/registar');
        $title = "Registar yourself for free course";
        $data = compact('url', 'title');
        return view('form')->with($data);
    }
    public function store(validate $request)
    {
        if (Auth::check()) {
            $customer = new Form;
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $password = $request['password'];
            $hashedPassword = Hash::make($password);
    
            $customer->password = $hashedPassword;
            $customer->save();
            return redirect('/registar/view');
        } else {
            // Redirect to a specific route when the user is not authenticated
            return redirect()->back()->with('loginerror','you are not logged in'); // Replace '/login' with the appropriate route
        }
    }
    
    
    public function view()
    {
        $customers = Form::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
    public function delete($id)
    {
        $form = Form::find($id);


        if ($form) {
            $form->delete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Form::findOrFail($id);
        if (is_null($customer)) {
            # code...
            return redirect('/registar/view');
        } else {
            $url = url('/registar/update') . '/' . $id;
            $title = "Update your information";
            return view('form', compact('customer', 'url', 'title'));
        }
    }
    public function update($id, validate $request)
    {
        $customer = Form::find($id);
        $customer->email = $request->email;
        $customer->name = $request['name'];
        $customer->save();
        return redirect('/registar/view');
    }
    public function signupView()
    {
        return view('signup');
    }
    public function signup(validate $request)
    {
        $person = new Login();
        $person->fullname = $request->input('name');
        $person->email = $request->input('email');
        $password =      $request->input('password');
        $hashedPassword = Hash::make($password);

        $person->password = $hashedPassword;
        $person->save();
        if ($person->save()) {
            # code...
            return redirect('/login')->with('success', 'Congragulation! Your acount has been created');
        }
        // return redirect()->back();
    }


    public function loginView()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // $password =      $;
        $user = Login::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            session()->put('id', $user->id);
            return redirect('/registar');
        } else {
            return redirect('/login')->with('error', "Invalid Email/password");
        }
    }
    public function logout()
    {
        session()->forget('id');
        return redirect('login');
    }
}
