<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\PostRequest;



class PostController extends Controller
{
    public function index()
    {
        
    $posts = Post::orderBy('titulo', 'ASC')->paginate(5);
    return view('posts.index', compact('posts'));    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

  public function create()
{
    return view('posts.create');
}


    public function edit($id)
    {
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));    
    }

        public function destroy($id)
        {
        Post::findOrFail($id)->delete();
        $posts = Post::orderBy('titulo', 'ASC')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function editarPrueba($id)
    {
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
    }

public function store(PostRequest $request)
{
    Post::create([
        'titulo' => $request->titulo,
        'contenido' => $request->contenido,
        'usuario_id' => 1
    ]);

    return redirect()->route('posts.index');
}


public function update(PostRequest $request, $id)
{
    $post = Post::findOrFail($id);
    $post->titulo = $request->get('titulo');
    $post->contenido = $request->get('contenido');
    $post->save();

    return redirect()->route('posts.index');
}
}