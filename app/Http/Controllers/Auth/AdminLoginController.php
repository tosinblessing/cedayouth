<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    //
    // setting up middleware
    public function __construct(){

        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {

        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // return true;

        // validating the form data 
        $this->validate($request , [ 
            'email' => 'required|email',
            'password' => 'required|min:6'   
        ]);
        // attempt  to login  the user
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ] , $request->remember)) {

            // if sucessful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        // if unsucessful then redirect to login with the form data or input
        return redirect()->back()->withInput($request->only('email', 'remember'));
        
        
    }
}
 