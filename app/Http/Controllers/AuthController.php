<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
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
            'banniere' => 'mimes:jpg,bmp,png',
            'images' => 'mimes:jpg,bmp,png',
        ]);

        $user = new User();
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('img', $request->file('images'));
            $user->photo = '/storage/' . $path;
        }
        if ($request->hasfile('banniere')) {
            $pathB = Storage::disk('public')->put('img', $request->file('banniere'));
            $user->banniere = '/storage/' . $pathB;
        }

        $user->name = $validate['name'];
        $user->pseudo = $validate['pseudo'];
        $user->bio = $validate['bio'];
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);
        $user->save();
        return redirect('/');
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
            return redirect('/')->with('success', 'log ok');
        }
        return redirect('/')->with('error', 'log');
    }


    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }


    // delete user_________________________________

    public function delete($id)
    {

        $user = User::where('id', '=', $id);
        $user->delete();
        return redirect('/backend');
    }

    // GET one user

    public function getOneUser($id)
    {
        $user = User::find($id);
        $users = User::where('id', '!=', 0)->get();   //Auth::user()->id    USER sans celui qui est authentifié  A FIXER
        $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(5)->get();
        $posts = Posts::with('user')->with('comment')->orderBy('created_at', 'DESC')->get();
        $profils = User::All();
        return view('editUsers', [
            'user' => $user,
            'users' => $users,
            'usersRandom' => $usersRandom,
            'id' => $id,
            'profils' => $profils,
            'posts' => $posts,
        ]);
    }

    // update user info_________________________________


    public function editerUser(Request $request, $id)
    {

        $validate = $request->validate([
            'pseudo' => 'required',
            'name' => 'required',
            'bio' => 'required',
        ]);
        $user = user::find($id);
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('img', $request->file('images'));
            $user->photo = '/storage/' . $path;
        }
        if ($request->hasfile('banniere')) {
            $pathB = Storage::disk('public')->put('img', $request->file('banniere'));
            $user->banniere = '/storage/' . $pathB;
        }

        $user->name = $validate['name'];
        $user->pseudo = $validate['pseudo'];
        $user->bio = $validate['bio'];
        $user->photo = '/storage/' . $path;
        $user->banniere = '/storage/' . $pathB;
        // $user->interets()->sync($request->interets);
        $user->save();
        // $user->interets()->attach($request->interets);

        return redirect('/')->with('usermodifié', ' modifié');
    }
}
