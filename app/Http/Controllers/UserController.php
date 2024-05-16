<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function index() {
       return view('admin.login');
    }

    public function loginAction(Request $request) {

        $run =  Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
       if($run){
            return redirect()->route('admin.dashboard')->with('success','You are Logged in sucessfully.');
       } else {
            echo 2;
       }

    }
    public function test() {
        echo "test";
    }

    public function dashboard() {
        dd(auth()->guard('admin')->user()->email);
    }

    public function newPage() {
        echo "Helo";
    }

    public function LogOut(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
