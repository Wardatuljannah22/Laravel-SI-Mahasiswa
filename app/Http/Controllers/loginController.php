<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //menampilkan halaman login
    public function showLoginForm()
    {
    	return view("login-form");
    }

    public function login(Request $request)
    {
    	//dd($request->all());

    	$credential = $request->only("username", "password");
    	if (Auth::attempt($credential)) {
    		// Meneruskan ke halaman daftar mahasiswa jika sukses
    		return redirect()->route("biodata.index");
    	} else{
    		// Mengembalikan ke halaman login jika gagal
    		return redirect()->back();
    	}
    }

        /**
     * Logout user
     */
    public function logout() 
    {
        Auth::logout(); // logout user

        // redirect ke halaman login
        return redirect()->route("login");
    }
    
}
