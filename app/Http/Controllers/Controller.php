<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function profile()
    {
        return view('includes.profiletest');
    }


    public function boucleBackend()
    {
        $users = User::All();

        return view('back', [

            'users' => $users,

        ]);
        return redirect()->route('backend');
    }

    public function boucleProfil()
    {
        $users = User::with('id', '=', 2);

        return view('account', [

            'users' => $users,

        ]);
        return redirect()->route('profil');
    }

    public function update(Request $request, $id)
    {


        $users = User::where('id', '=', $id);
        $users->update([
            'pseudo' => $request->pseudo,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/')->with('modifié', ' modifié');
    }

    public function delete($id)
    {

        $user = User::where('id', '=', $id);

        $user->delete();
        return redirect('/backend');
    }


    public function listeAmis()
    {
        $users = User::All();

        return view('amis', [

            'users' => $users,

        ]);
    }
}
