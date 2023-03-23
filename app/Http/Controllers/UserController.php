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
