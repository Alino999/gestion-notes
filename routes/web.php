<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\Utilisateur;
use App\Http\Controllers\EleveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route index iportfolio
Route::get('index', [IndexController::class, 'index']);

//route inner-page iportfolio
Route::get('inner', [IndexController::class, 'inner']);

//route portfolio-details iportfolio
Route::get('portfolio', [IndexController::class, 'portfolio']);

//route pour le bulletin
Route::get('bulletin', [BulletinController::class, 'bulletin']);

//route pour la page d'inscription
Route::get('register', [BulletinController::class, 'register']);

//route pour la page de connexion
Route::get('login', [BulletinController::class, 'login'])->name('login');

//route pour l'insertion des données dans la base de données
Route::post('inscription', [BulletinController::class, 'create'])->name('inscrit');

//route pour la connexion d'un user
Route::post('connextion', [BulletinController::class, 'check'])->name('connexion');

//route pour l'ajout d'un compte
Route::post('ajout', [EleveController::class, 'inser'])->name('ajout');

//route pour la connexion d'un user
Route::post('connextion', [EleveController::class, 'check'])->name('connexion');

//route pour poster les notes
Route::get('/', 'PostController@index');
Route::resource('posts', 'PostController');

//route pour summary juste un teste
Route::get('summary', [BulletinController::class, 'summary']);
