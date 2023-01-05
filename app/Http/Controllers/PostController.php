<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

   
    public function show(Post $post){
       
        return view('blog-post', ['post'=>$post]);
    }

    public function index(){
        $posts= Post::all();
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    public function create(){
        return view('admin.posts.create');
    }
    public function store(Request $request){
        
        // dd(request()->all());

        $inputs = request()->validate([
            'title'=>'required|min:8',
            'post_image'=>'file',
            'body'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']= request('post_image')->store('storage/images');
        }
     auth()->user()->posts()->create($inputs);
     Session::flash('post-created-message', 'Post was Created Successfully');
     return redirect()->route('post.index');
    }

    public function destroy(Post $post){
        $post->delete();
        Session::flash('message', 'Post Deleted');
        return back();
    }
}
