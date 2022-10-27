<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;

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
    return view('layout');
});
Route::get('/EnseignantF', 'EnseignantController@index1')->name('EnseignantF');
Route::get('/ModuleF', 'ModuleController@index1')->name('ModuleF');
Route::get('/ExamenF', 'ExamenController@index1')->name('ExamenF');
Route::get('/EtudiantF', 'EtudiantController@index1')->name('EtudiantF');
Route::get('/clubF', 'ClubController@index1')->name('clubF');
Route::get('/EventF', 'EvenmentController@index1')->name('EventF');
Route::get('/MatiereF', 'MatiereController@index1')->name('MatiereF');
Route::get('/stuF', 'StuffController@index1')->name('stuF');
Route::get('/EtablissementF', 'etablissementController@index1')->name('EtablissementF');
Route::get('/layout', function () {
    return view('layout');
});

Auth::routes();
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
Route::get('/CourF', 'CourController@index1')->name('CourF');

Route::get('/chat', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::resource("/examens", ExamenController::class);
Route::resource("/modules", ModuleController::class);
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::resource("/cour", CourController::class);
Route::resource("/stuff", StuffController::class);
Route::resource("/etablissement", etablissementController::class);
Route::resource("/matiere", MatiereController::class);
Route::resource("/evenment", EvenmentController::class);
Route::resource("/club", ClubController::class);
Route::resource("/etudiants", EtudiantController::class);
Route::resource("/enseignants", EnseignantController::class);
Route::get('/about', function () {
    return view('about');
})->name('about');
