<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/clubF', 'ClubController@index1')->name('clubF');
Route::get('/EventF', 'EvenmentController@index1')->name('EventF');
Route::get('/MatiereF', 'MatiereController@index1')->name('MatiereF');
Route::get('/layout', function () {
    return view('layout');
});

Auth::routes();

Route::get('/CourF', 'CourController@index1')->name('CourF');


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
