<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Likes;

use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
        $comments = Comments::where('post_id', '!=', '0')->with('user')->orderBy('created_at', 'DESC')->get();
        $likes = Likes::All();
        //dd($posts);
        $user = Auth::user();
        return view('index', [
            'likes' => $likes,
            'user' => $user,
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
        $user = Auth::user();
        return view('amis', [
            'user' => $user,
            'users' => $users,
            'posts' => $posts,
            'usersRandom' => $usersRandom,
        ]);
    }


    // ajouter post________________________________
    public function AddPost(Request $request)
    {
        if($request->file('imagea')!=null){
        $path1 = Storage::disk('public')->put('img', $request->file('imagea'));    //chemin + nom image
        } else {
            $path1 = null;
        }
        $post = new Posts();
        $post->user_id = $request->id;
        $post->content = $request->content;
        $post->image = $path1;
        $post->save();
        return redirect('/')->with('ajouté', 'ok');
    }


    
    // ajouter comm________________________________
    public function AddComm(Request $request)
    {
        $comm = new Comments();
        $comm->user_id = $request->user_id;
        $comm->post_id = $request->post_id;
        $comm->content = $request->comm;
        $comm->save();
        return redirect('/')->with('commajouté', 'ok');
    }



    // get one post____________________________________________

    public function getOnePost($id)
    {
        $user = Auth::user();
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
            'user' => $user,
        ]);
    }

    // editer post____________________________________

    public function editerPost(Request $request, $id)
    {
        $post = Posts::find($id);
        $validate = $request->validate([
            'content' => 'required',
        ]);

        if($request->file('imageb')!=null){
            $path2 = Storage::disk('public')->put('img', $request->file('imageb'));    //chemin + nom image
            } else {
                $path2 = $post->image;
            }
        
        $post = Posts::find($id);
        $post->image = $path2;
        $post->content =  $validate['content'];
        // $film->interets()->sync($request->interets);
        $post->save();
        // $user->interets()->attach($request->interets);

        return redirect('/')->with('modifié','ok');
    }

    // delete post___________________________________________________________________

    public function deletePost($id)
    {

        $post = Posts::where('id', '=', $id);

        $post->delete();
        return redirect('/')->with('supprimé', 'ok');;
    }


    public function interest()
    {
        $user = Auth::user();
        $users = User::All();
        $posts = Posts::with('user')->get();
        $usersRandom = User::where('id', '!=', 0)->inRandomOrder()->take(4)->get();

        return view('interest', [
            'user' => $user,
            'posts' => $posts,
            'users' => $users,
            'usersRandom' => $usersRandom,
        ]);
    }
}
