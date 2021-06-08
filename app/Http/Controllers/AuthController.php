<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        $user = User::where('phone',$request->phone)->first();
        if (Auth::attempt([
            'phone'=>$request->phone,
            'password'=>$request->password,
        ])){
            if ($user->role==0) {
                return redirect(url('driver'));
            }
            else{
                return redirect(url('client'));

            }
        }
        else{
            return redirect()->back()->with('error','Credentials Not Found');
        }
    }
    public function register(){
        return view('auth.register');
    }
    public function reg(Request $request){
        $register = User::create([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'role'=>$request->input('role'),
            'password'=>Hash::make($request->input('password')),
        ]);
        return redirect(url('/'))->with('success','REGISTERED SUCCESS LOGIN');
    }
    public function carrierRegister(){
        return view('auth.carrier');
    }
    public function carrierReg(Request $request){
        $register = User::create([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'carrier'=>$request->input('carrier'),
            'plates'=>$request->input('plates'),
            'role'=>$request->input('role'),
            'password'=>Hash::make($request->input('password')),
        ]);
        return redirect(url('/'))->with('success','CARRIER REGISTERED SUCCESS LOGIN');
    }

}
