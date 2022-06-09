<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }

    public function registration(Request $request)
    {
        $validate = $request->validate([
            'pseudo' => 'required',
            'name' => 'required',
            'bio' => 'required',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
        ]);
        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $user = new User();
        $user->name = $validate['name'];
        $user->pseudo = $validate['pseudo'];
        $user->bio = $validate['bio'];
        $user->photo = $path;
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);
        $user->save();
        return redirect('/');
    }

    public function logged()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember = true)) {
            $request->session()->regenerate();
            return redirect('/')->with('logged', 'user logged');
        }
        return view('error');
    }

    public function logout(Request $request)
    {

        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

   

  

   


    
}
