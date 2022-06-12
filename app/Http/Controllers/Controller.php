<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Posts;
use App\Models\Comments;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // boucle mur page principale________________________________

    public function Mur()
    {
        $timer = Carbon::now();
        $users = User::where('id', '!=', 0)->get();   //Auth::user()->id    USER sans celui qui est authentifié  A FIXER
        $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(5)->get();
        $posts = Posts::with('user')->with('comment')->orderBy('created_at', 'DESC')->get();
        $comments = Comments::where('post_id', '!=', '0')->with('user')->orderBy('created_at', 'DESC')->get();   //A FAIRE ID DU POST
        //dd($posts);
        return view('index', [
            'posts' => $posts,
            'comments' => $comments,
            'usersRandom' => $usersRandom,
            'users' => $users,
            'tim' => $timer,

        ]);
    }

    // boucle profil users________________________________

    public function boucleProfil($id)
    {
        $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(4)->get();
        $posts = Posts::with('user')->with('comment')->orderBy('created_at', 'DESC')->get();
        $profils = User::All();
        $users = User::where('id', '!=', 0)->get(); 
        $user = User::find($id);
        return view('account', [
            'usersRandom' => $usersRandom,
            'profils' => $profils,
            'posts' => $posts,
            'users' => $users,
            'user' => $user,
        ]);
 
    }

    // LISTE DAMIS_________________________________

    public function listeAmis()
    {
        $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(4)->get();
        $users = User::All();
        $posts = Posts::with('user')->with('comment')->orderBy('created_at', 'DESC')->get();
        return view('amis', [

            'users' => $users,
            'posts' => $posts,
            'usersRandom' => $usersRandom,
        ]);
    }


    // ajouter post________________________________
    public function AddPost(Request $request)
    {

        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $post = new Posts();
        $post->user_id = $request->id;
        $post->content = $request->content;
        $post->image = $path;
        $post->save();
        return redirect('/')->with('ajouté', ' ');
    }


// get one post____________________________________________

public function getOnePost($id)
{
    $post = Posts::find($id);
    $users = User::where('id', '!=', 0)->get();   //Auth::user()->id    USER sans celui qui est authentifié  A FIXER
    $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(5)->get();
    $posts = Posts::with('user')->with('comment')->orderBy('created_at', 'DESC')->get();
    $profils = User::All();
    return view('editPosts', [
        'users' => $users,
        'usersRandom' => $usersRandom,
        'id' => $id,
        'profils' => $profils,
        'posts' => $posts,
        'post' => $post,
    ]);
}

// editer post____________________________________

    public function editerPost(Request $request, $id)
    {

        $validate = $request->validate([
            'content' => 'required',
        ]);
        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $post = Posts::find($id);
        $post->content =  $validate['content'];
        $post->image = $path;
        // $film->interets()->sync($request->interets);
        $post->save();
        // $user->interets()->attach($request->interets);

        return redirect('/')->with('modifié', ' modifié');
    }




    // delete post___________________________________________________________________

    public function deletePost($id)
    {

        $post = Posts::where('id', '=', $id);

        $post->delete();
        return redirect('/');
    }


    public function interest()
    {

        $users = User::All();
        $posts = Posts::with('user')->get();
        $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(4)->get();

        return view('interest', [
            'posts' => $posts,
            'users' => $users,
            'usersRandom' => $usersRandom,
        ]);
    }
}
