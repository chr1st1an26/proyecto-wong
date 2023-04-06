<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user){
         $posts = Post::where('user_id', $user->id)->paginate(6); 
         return view('dashboard',[ 'user' => $user, 
         'posts'=>$posts
        ]);
        }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        //  $this->validate($request,[ 
        //     'titulo' => 'required|max:255', 
        //     'descripcion' => 'required',
        //      'imagen' => 'required' ]); 
       
             
             Post::create([
                'titulo' => $request -> titulo, 
                'descripcion' => $request -> descripcion, 
                'imagen' => $request -> imagen,
                 'user_id' => auth() ->user() ->id
                 ]); 
                 
                 return redirect()->route('post.index', auth()->user()->username);
            }

}
