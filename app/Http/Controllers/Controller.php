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


      // boucle crud users_______________________________

    public function boucleBackend()
    {
        $users = User::All();

        return view('back', [

            'users' => $users,

        ]);
        return redirect()->route('backend');
    }

            // boucle profil mur page principale________________________________

    public function Mur()
    {
        $tim = Carbon::now();

        $posts = Posts::with('user')->get();
        $comments = Comments::with('post')->where('post_id', '=', 6)->orderBy('created_at', 'DESC')->get();
       // dd($posts);
        return view('index', [
            'posts' => $posts,
            'comments' => $comments,
            'tim' => $tim,
        ]);

    }

        // boucle profil users________________________________


    public function boucleProfil()
    {
        $users = User::All()->where('id', '=', 2);
        
        return view('account', [

            'users' => $users,

        ]);
        return redirect()->route('profil');
    }



    // LISTE DAMIS_________________________________

    public function listeAmis(){
        $users = User::All();
       
        return view('amis', [
    
            'users' => $users,
    
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

}

