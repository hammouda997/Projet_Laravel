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


Route::get('/ModuleF', 'ModuleController@index1')->name('ModuleF');
Route::get('/ExamenF', 'ExamenController@index1')->name('ExamenF');
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


Route::get('/about', function () {
    return view('about');
})->name('about');
