<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);;
        return view('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success','Post Created Successfuly');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    public function edit($id)
    {   
        $user_id = auth()->user()->id;
        $post = Post::find($id);

        if($user_id != $post->user->id){
            return redirect('/posts')->with('error','You are not the owner of that post');
        }

        return view('posts.edit')->with('post',$post);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::find($id);
        $user_id = auth()->user()->id;
        if($user_id != $post->user->id){
            return redirect('/posts')->with('error','You are not the owner of that post');
        }

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Updated Successfuly');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $user_id = auth()->user()->id;
        if($user_id != $post->user->id){
            return redirect('/posts')->with('error','You are not the owner of that post');
        }

        $post->delete();

        return redirect('/posts')->with('success','Post Deleted Successfuly');
    }
}
