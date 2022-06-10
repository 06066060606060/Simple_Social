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
          $posts = Posts::All();
  
          return view('back', [
  
              'users' => $users,'posts' =>$posts
  
          ]);
          return redirect()->route('backend');
      }
  


            // boucle mur page principale________________________________


    public function Mur()
    {
        $tim = Carbon::now();
        $users = User::where('id', '!=', Auth::user()->id)->get();   //USER sans celui qui est authentifié  A FIXER
        $posts = Posts::with('user')->get();
        $comments = Comments::with('post')->where('post_id', '!=', 0)->orderBy('created_at', 'DESC')->get();
       // dd($posts);
        return view('index', [
            'posts' => $posts,
            'comments' => $comments,
            'users' => $users,
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

    public function update(Request $request, $id)
    {


        $users = User::where('id', '=', $id);
        $users->update([
            'pseudo' => $request->pseudo,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('backend')->with('modifié', ' modifié');

    }

    public function updatePost(Request $request, $id)
    {


        $posts = Posts::where('id', '=', $id);
        $posts->update([
            'content' => $request->content,
            
           
        ]);

        return redirect('backend')->with('modifié', ' modifié');
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

public function deletePost($id)
       {

           $post = Posts::where('id', '=', $id);

           $$post->delete();
           return redirect('/backend');
       }
}

