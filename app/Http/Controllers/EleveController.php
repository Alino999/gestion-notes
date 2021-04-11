<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\EleveModel;

class EleveController extends Controller
{
    public function login(){
        return view('iportfolio.index');
    }
     public function inser(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required',
            'genre' => 'required',
            'email' => 'required|email|unique:eleve_models',
            'password' => 'required|min:4|max:16',
            'role' => 'required'
        ]);


        $user = new EleveModel();
        $user -> nom = $request->nom;
        $user -> prenom = $request->prenom;
        $user -> naissance = $request->naissance;
        $user -> genre = $request->genre;
        $user -> email = $request->email;
        $user -> password =Hash::make( $request -> password);
        $user -> role = $request->role;
        $user -> classe = $request->classe;
        $query = $user->save();

        if (  $query){
            return view('iportfolio.inner-page');
        }else{
            return ('erreur');
        }
    }
    protected     function check(Request $request){
        //return $request -> input();
        //valide requete
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:16',
        ]);
        // si c'est valide avec succes connecter avec succes
         $user =EleveModel::where('email','=', $request->email)->first();
         if($user){
            if (Hash::check($request->password, $user->password)){
                return view('iportfolio.inner-page');
            }

         }else{
             return 'Connexion echoué';
         }
        }
}
