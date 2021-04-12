<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateurs;
use App\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BulletinController extends Controller
{
    public function bulletin(){
        return view('bulletin.bulletin');
    }
    public function register(){
        return view('form.register');
    }
    public function summary(){
        $post = Post::all();
        return view('partials.summary', ['posts'=>$post]);
    }
    public function login(){
        return view('form.inscription');
    }
     public function create(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required',
            'genre' => 'required',
            'email' => 'required|email|unique:utilisateurs',
            'password' => 'required|min:4|max:16',
            'role' => 'required'
        ]);


        $user = new Utilisateurs();
        $user -> nom = $request->nom;
        $user -> prenom = $request->prenom;
        $user -> naissance = $request->naissance;
        $user -> genre = $request->genre;
        $user -> email = $request->email;
        $user -> password =Hash::make( $request -> password);
        $user -> role = $request->role;
        $query = $user->save();

        if (  $query){
            return view('form.inscription');
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
         $user = Utilisateurs::where('email','=', $request->email)->first();
         if($user){
            if (Hash::check($request->password, $user->password)){
                return view('iportfolio.index');
            }
            if($user = Utilisateurs::where('role','=','admin', $request->role)){
                return view('iportfolio.inner-page');
            }
            elseif($user = Utilisateurs::where('role','=','superadmin', $request->role)){
                return view('iportfolio.index');
            }

         }else{
             return 'Connexion echoué';
         }
        }


//     protected function validator(array $data)
// {
//     return Validator::make($data, [
//         'nom' => ['required', 'string', 'max:50'],
//         'prenom' => ['required', 'string', 'max:60'],
//         'naissance' => ['required', 'date', 'max:20'],
//         'genre' => ['required', 'string', 'max:15'],
//         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//         'password' => ['required', 'string', 'min:8', 'confirmed'],
//         'role' => ['required', 'string', 'max:25'],
//     ]);
// }
// protected function create(array $data)
// {
//     return Utilisateurs::create([
//         'nom' => $data['nom'],
//         'prenom' => $data['prenom'],
//         'naissance' => $data['naissance'],
//         'genre' => $data['genre'],
//         'email' => $data['email'],
//         'password' => Hash::make($data['password']),
//         'role' => $data['role'],
//     ]);
//}
}
