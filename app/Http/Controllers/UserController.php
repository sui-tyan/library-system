<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home(){
        return view("welcome");
    }

    public function login(){
        return view("user.login");
    }

    public function authenticate(Request $req){
        $validated=$req->validate([
            'studentId'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt($validated)){
            $req->session()->regenerate();
            return redirect("/");
        } else {
            return redirect("/login");
        }
    }
    
    public function books(){
        return view("user.books");
    }

    public function findBooks(){
        return view("user.find-books");
    }

    public function showProfile(){
        return view("user.profile");
    }

    public function logout(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect("/login");
    }
}
