<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM : 2141720254 <br>  Nama : Mirza Priscilla Faradiba";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel Dengan ID " .$id ;
// });

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'show']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'show']);

// Route::get('/home', function () {
//         return "<h1>Hallo Mirza Prsicilla Selamat Datang di WEB Educa Studio</h1>";
//     });

// Route::prefix('product')->group(function () {
//     Route::get('/list', [PageController::class, 'product']);
//    });

// Route::get('/news/{parameter}', [PageController::class, 'news']);

// Route::prefix('program')->group(function () {
//     Route::get('/list', [PageController::class, 'program']);
//    });

// Route::get('/aboutus', [PageController::class, 'aboutus']);

// Route::resource('contact-us', PageController::class)->only(['index']);






//PRAKTIKUM PERTEMUAN 6
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    //PRAKTIKUM 1 PERTEMUAN 3
    //Route::get('/home', [PagesController::class, 'home']);

    // Route::prefix('product') ->group(function (){
    //     Route::get('/', [PagesController::class, 'product']);
    // });

    // Route::get('/news/{param}', [PagesController::class, 'news']);

    // Route::prefix('program')->group(function () {
    //         Route::get('/', [PagesController::class, 'program']);
    //     });

    // Route::get('/aboutus', [PagesController::class, 'aboutus']);

    // Route::resource('contact-us', PagesController::class)->only(['index']);



    // //PRAKTIKUM 2 PERTEMUAN 3

    // Route::get('/pwl3', function (){
    //     return view ('layout.template');
    // });

    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/kuliah', [KuliahController::class, 'index']);

    //PRAKTIKUM 3 PERTEMUAN 4
    Route::get('/kendaraan', [KendaraanController::class, 'index']);

    //TUGAS 3 PERTEMUAN 4
    // Route::get('/hobi', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/matakuliah', [MataKuliahController::class, 'index']);
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //
    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa','id');
    // Route::get('/mahasiswa/{id}/khs',[MahasiswaController::class,'khs']);
    Route::get('/mahasiswa/{id}/khs',[MahasiswaController::class,'khs']);
    // Route::get('/mahasiswa/{id}/show',[MahasiswaController::class, 'nilai']);   
    Route::get('/mahasiswa/{id}/khs',[MahasiswaController::class,'khs']);

});


