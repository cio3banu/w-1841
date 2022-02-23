<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArticleController;
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
/*
Route::get('/home', [TestController::class, 'index']);

//Route::get('/home', 'App\Http\Controllers\TestController@index');

Route::get('/about', [TestController::class, 'about']);

Route::get('/contacts', [TestController::class, 'contacts']);

Route::get('/ceva', [TestController::class, 'ceva']);


//Route::view('/welcome', 'ceva', ['name' => 'Ion']);

Route::get('user/{id}', [TestController::class, 'userid']);

Route::name('home')->get('/', [MyController::class, 'index']);

Route::resource('photos', PhotoController::class);
*/

//Article
Route::get('/article', [ArticleController::class, 'index']);

Route::get('/article/add', [ArticleController::class, 'add']);

Route::post('/article/add', [ArticleController::class, 'store']) ->name('articleStore');
