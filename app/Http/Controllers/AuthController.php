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
            'name' => 'required',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $validate['name'];
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

    public function profile()
    {
        return view('includes.profiletest');
    }
    public function listeAmis()
    {
        return view('includes.listeAmis');
    }

    public function boucleBackend(){
        $users = User::All();
       
        return view('index', [

            'users' => $users,

        ]);
    }
  

    public function update(Request $request, $id)
    {
  
          
        $users= User::where('id', '=', $id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password)
        ]);

    return redirect('/')->with('modifié','Film modifié');
    
    }

    public function delete($id)
    {
        
        $user = User::where('id','=',$id);
        
        $user->delete();
        return redirect('/');
        
        
}
    
}
