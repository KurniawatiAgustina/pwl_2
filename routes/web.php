<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', function () {
//echo "Selamat Datang";
//});

//Route::get('/about', function () {

//echo "NIM : 2141720040 <br> NAMA : Kurniawati Agustina";
//});

//Route::get('/articles/{id}', function ($id) {
//echo "Halaman artikel dengan id " .$id;
//});

//Route::get('/',[PageController::class,'index']);

//Route::get('/about',[PageController::class,'about']);

//Route::get('/articles/{id}',[PageController::class,'show']);

//Route::get('/',[HomeController::class, 'index']);
//Route::get('/about',[AboutController::class, 'about']);
//Route::get('/articles/{id}',[ArticlesController::class, 'show']);


Route::get('/home', function () {
    return "<center><h1>Welcome Education Studio</h1></center>";
});

Route::prefix('product')->group(function () {
    Route::get('/list', [PageController::class, 'product']);
}); // menampilan website Educa Studio yang berisi mengenai games menarik untuk anak anak 

Route::get('/news/{param}', [PageController::class, 'news']);
// menampilkan website Educa Studio yang berisi kumpulan games dengan aplikasi marbel and kids
Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});
// 404 Not Found

Route::get('/about', [PageController::class, 'about']);
// Menampilkan website Educa Studio yang berisi kumpulan nyanyian untuk anak anak 


Route::get('/news/{parameter}', [PageController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});

//Route::get('/aboutus', [PageController::class, 'aboutus']);

Route::get('/aboutus', [PageController::class, 'aboutus']);

Route::resource('contact-us', PageController::class)->only(['index']);

  
