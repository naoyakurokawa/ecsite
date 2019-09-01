<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function confirm(Request $req){
        $req->session()->put('name', $req->input('name'));
        $req->session()->put('email', $req->input('email'));
        $req->session()->put('password', $req->input('password'));
        return view('user.confirm');
    }

    public function complete(Request $req){
        $user = new User;
        $user->name = $req->session()->get('name');
        $user->email = $req->session()->get('email');
        $user->password = $req->session()->get('password');
        $user->save();
        return view('user.complete');
    }
}
