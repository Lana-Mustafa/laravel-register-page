<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{



    public function index(){
        return view('RegisterForm');

    }
    public function validForm(Request $request){
        
       
        
        $request->validate([
                'fullname' =>'required|min:4|max:10',
                'email'    =>'required|email',
                'mobile'   =>'required|numeric|digits:14',
                'password' =>'required|confirmed|min:8|max:14',
                'password_confirmation'=>'required',

        ]);

        $input= $request->input(); 

         return view('RegisterForm',compact('input'));
        


    }
    
}
