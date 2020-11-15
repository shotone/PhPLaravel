<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postlogin(LoginRequest $request){
        $credential = $request->except(('_token'));

        if(Auth::attempt($credential)){
            Auth::user()->getAuthIdentifierName()

            return redirect()->route('home');

        }else{
            abort(403);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function register_view(){
        return view('register_view');
    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = bcrypt($request->post('password'));
        $user->save();
        return redirect()->route('login');


    }
}
