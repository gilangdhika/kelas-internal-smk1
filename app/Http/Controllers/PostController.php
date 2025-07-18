<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('id', 'desc')->get();

        //  dd($posts->toArray());

        return view('post' , [
            'posts' => $posts
        ]);
        
    }
    public function create()
    {
        return view('tambah-post');
    }
    public function edit($id)
    {
        // dd($id);
        $post = Post::find($id);

        // dd($post-

        return view('edit-post', [
                'posts' => $post
        ]);

    }

    public function store(Request $request)
    {

        Post::create($request->all());

        return redirect('/posts');
    }
    

    public function update(Request $request, $id)
    {

    // dd($request->all());

    $post = Post::find($id);
    
    $post->update($request->all());

    return redirect('/posts');
  }

  public function show($id)
  {
     $post = Post::find($id);

    return view('detail-postingan', [
         'post' => $post
     ]);
  }

  public function beast($id)
{
    $post = Post::find($id);
    
    $post->delete();

    return redirect('/posts');
}
}