<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dashboard(){
       if(Auth::user()->role == 'admin'){
           return view('admin.index');
       }
       return view('user.index');
    }

    public function register(Request $request){
        if($request->isMethod('post')){
            $validated = $request->validate([
                'username' => 'min:3|required|unique:users',
                'fname' => 'min:2|required',
                'lname' => 'min:2|required',
                'password' => 'min:4|required',
            ]);
//            $user = new User();
//            $user->username = $request->username;
//            $user->fname = $request->fname;
//            $user->lname = $request->lname;
//            $user->password = Hash::make($request->password);
//            $user->role = 'admin';
//            $user->save();
            User::create($validated);
            return redirect()->route('login')->with('success','User created successfully');
        }
        return view('register');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $validated = $request->validate([
                'username' => 'min:3|required',
                'password' => 'min:4|required',
            ]);
            if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
                //this will make a new session for the authenticated user so nobody can hijack his sessions
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }else{
                return back()->with('error','Invalid Username or Password');
            }
        }
        return view('login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
