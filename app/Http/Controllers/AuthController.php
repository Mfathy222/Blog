<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register( Request $request)
    {
        // validation
        $data = $request->validate([
            "name"=>"required|string|max:100",
            "email"=>"required|email|unique:users,email",
            "password"=>"required|min:8|string|confirmed"
        ]);

        //create

        $data['password']=bcrypt($data['password']);
        //register
        $user = User::create($data);
        // login after register
        Auth::login($user);
        return redirect(url('/'));
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login( Request $request)
    {
        // validation
        $data = $request->validate([
            
            "email"=>"required|email",
            "password"=>"required|min:8|string"
        ]);
        //check

        $is_login= Auth::attempt(["email" => $data['email']
        , "password" => $data['password']]);
        if($is_login != true){
        return redirect(url('login'))
        ->withErrors('credintials not correct');
        }
        
        return redirect(url('/'));
    }

    public function logout(){

        Auth::logout();
        return redirect(url('login'));
    }


}
