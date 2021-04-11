<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtenez tous les messages, classés par ordre décroissant en premier
        $posts = Post::latest()->get();

        //Passer la collection de messages à afficher
        return view('partials.summary', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iportfolio.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'maths' => 'required',
            'fr' => 'required',
            'ang' => 'required',
            'svt' => 'required' ,
            'eps' => 'required',
            'hg' => 'required'
        ]);


        //Créer un slug à partir du titre
       // $validated['slug'] = Str::slug($validated['title'], '-');


        //Créer et enregistrer un article avec des données validées
        $post = Post::create($validated);

        //Redirigez l'utilisateur vers la publication créée avec une notification de réussite
        return redirect(route('welcome', [$post->slug]))->with('notification', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('partials.summary', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //Valider les données de formulaire publiées
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'maths' => 'required',
            'fr' => 'required',
            'ang' => 'required',
            'svt' => 'required' ,
            'eps' => 'required',
            'hg' => 'required'
        ]);

        //Créer un slug à partir du titre
        $validated['slug'] = Str::slug($validated['title'], '-');

        //Mettre à jour la publication avec des données validées
        $post->update($validated);

        //Redirigez les notes vers la publication créée avec une notification mise à jour
        return redirect(route('partials.summary', [$post->slug]))->with('notification', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //Supprimer les notes spécifié
        $post->delete();

        //Rediriger l'utilisateur avec une notification supprimée
        return redirect(route('partials.summary'))->with('notification', '"' . $post->title .  '" deleted!');
    }
}
