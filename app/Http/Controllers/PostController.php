<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    private $posts = [];

    public function index()
    {
        
        return view('posts.index', [
            'posts' => $this->posts
        ]);
    }


    public function create()
    {
        return view('posts.create');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',   
            'contenido' => 'required|string',
        ], [
            'title.required' => 'El título es obligatorio.',
            'contenido.required' => 'El contenido no puede estar vacío.',
        ]);

        // Post::create([
        //     'title' => $request->input('title'),
        //     'contenido' => $request->input('contenido'),
        // ]);

        $post = [
            'title' => $request->input('title'),
            'contenido' => $request->input('contenido'),
        ];
        // Simular almacenamiento (en sesión para que sobreviva entre peticiones)
        $posts = session('posts', []);
        $posts[] = $post;
        session(['posts' => $posts]);

        return redirect()->route('posts.show')->with('success', 'Post creado exitosamente.');
    }

    public function show()
    {
        $posts = session('posts', []);
        return view('posts.show', compact('posts'));
       
    }

}
