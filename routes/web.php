<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CitronnadeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route page de nav
// Route::get('/', function () {
//     return view('home.home');
// })->name('app_home');

Route::get('/about', function () {
    return view('home.about');
})->name('app_about');

// Route::get('/citronnade', function () {
//     return view('home.citronnade');
// })->name('app_citronnade');


Route::get('/home.accueil', [HomeController::class, 'index'])->name('accueil.index');


Route::get('/home.citronnade', [CitronnadeController::class, 'index'])->name('citronnade.index');

/////////////////////////////////////////
// permet de gerer la recherche ////////

Route::get('/articles/search', [ArticleController::class, 'search'])->name('article.search');

/////////////////////////////////////////


//Route pour des API
Route::get('/api/users',[UserController::class, 'index']);
Route::get('/api/users/{id}',[UserController::class, 'show']);

/////////////////////////////////////////

// Route Dashboard

Route::middleware(['auth'])->group(function() {

    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',[DashboardController::class, 'logout'])->name('logout');
    Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
    Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/{id}',[ArticleController::class, 'show'])->name('article.edit');
    Route::post('/article/post',[ArticleController::class, 'update'])->name('article.update');
    Route::post('/article/create',[ArticleController::class, 'store'])->name('store_article');

});

/////////////////////////////////////////

// Route pour la connexion et l'enregistrement //

Route::get('/register', [RegisterController::class, 'form_register'])->name('register');
Route::post('/register', [RegisterController::class, 'form_register_post'])->name('register');

Route::get('/login',[LoginController::class, 'form_login'])->name('login');
Route::post('/login',[LoginController::class, 'form_login_post'])->name('login');

//////////////////////////////////////////////
