<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function registration(Request $request)
    {
        // // Retrieve the user by email
        // $user = User::where('email', $request->input('email'))->first();

        // if ($user && $request->input('password') == $user->password) {
        //     return redirect()->route('home');
        // }

        // echo "wrong password";
        // // return redirect()->route('login')->with('error', 'Invalid email or password');
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'password_confirm' => 'required|same:password'
        ]);

        
        echo "<pre>";
        print_r($request->all());


         
    }

    function create(){
        return view('registration');
    }
    function store(Request $req){
        $name = $req->fullname;
        $email = $req->email;
        $password = $req->password;
        // $password_confirm = $req->password_confirm;

        $p = new \App\Models\User;

        $p->name = $name;
        $p->email = $email;
        $p->password = $password;

        $p->save();

        return "Successfully Added ";
         

    }
}





